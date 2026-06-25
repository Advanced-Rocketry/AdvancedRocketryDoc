#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
PULL_SOURCE=true
FULL_REFRESH=false
WAIT_SECONDS="${DEPLOY_WAIT_SECONDS:-120}"

usage() {
  cat <<'EOF'
Usage: ./scripts/deploy.sh [--no-pull] [--full-refresh]

Build, recreate, and verify the AdvancedRocketryDoc deployment.

Options:
  --no-pull       Do not run git pull --ff-only before deploying.
  --full-refresh  Stop the Compose stack and rebuild without Docker cache.
  -h, --help      Show this help.
EOF
}

while [ "$#" -gt 0 ]; do
  case "$1" in
    --no-pull)
      PULL_SOURCE=false
      ;;
    --full-refresh)
      FULL_REFRESH=true
      ;;
    -h|--help)
      usage
      exit 0
      ;;
    *)
      printf 'Unknown option: %s\n' "$1" >&2
      usage >&2
      exit 2
      ;;
  esac
  shift
done

for command in git docker; do
  if ! command -v "$command" >/dev/null 2>&1; then
    printf 'Required command not found: %s\n' "$command" >&2
    exit 1
  fi
done

compose() {
  docker compose \
    --project-directory "${ROOT_DIR}" \
    -f "${ROOT_DIR}/compose.yml" \
    "$@"
}

wait_for_services() {
  deadline=$((SECONDS + WAIT_SECONDS))
  services=("nginx" "php")
  printf 'Waiting up to %s seconds for services to become healthy...\n' "${WAIT_SECONDS}"

  while [ "${SECONDS}" -lt "${deadline}" ]; do
    all_healthy=true
    for service in "${services[@]}"; do
      container_id="$(compose ps -q "${service}" 2>/dev/null || true)"
      if [ -z "${container_id}" ]; then
        all_healthy=false
        continue
      fi
      state="$(
        docker inspect \
          --format '{{if .State.Health}}{{.State.Health.Status}}{{else}}{{.State.Status}}{{end}}' \
          "${container_id}" 2>/dev/null || echo "unknown"
      )"
      case "${state}" in
        healthy|running)
          printf '  %s is %s\n' "${service}" "${state}"
          ;;
        unhealthy|exited|dead)
          printf '  %s entered state %s\n' "${service}" "${state}" >&2
          compose logs --tail=50 "${service}" >&2
          all_healthy=false
          ;;
      esac
    done
    if [ "${all_healthy}" = true ]; then
      return 0
    fi
    sleep 2
  done

  printf 'Timed out waiting for services.\n' >&2
  compose logs --tail=100 >&2
  return 1
}

cd "${ROOT_DIR}"

if [ "${PULL_SOURCE}" = true ]; then
  printf 'Updating the checkout with a fast-forward-only pull...\n'
  git pull --ff-only
else
  printf 'Skipping git pull.\n'
fi

export BUILD_REVISION
BUILD_REVISION="$(git rev-parse HEAD)"
printf 'Deploying revision %s.\n' "${BUILD_REVISION}"

if [ "${FULL_REFRESH}" = true ]; then
  printf 'Stopping the Compose stack without removing named volumes...\n'
  compose down
  printf 'Building all services without Docker cache...\n'
  compose build --no-cache
else
  printf 'Building all services with normal Docker cache reuse...\n'
  compose build
fi

printf 'Recreating services from newly built images...\n'
compose up -d --force-recreate
wait_for_services

printf 'Verifying Nginx health...\n'
if compose exec -T nginx nginx -t >/dev/null 2>&1; then
  printf 'Nginx configuration is valid.\n'
else
  printf 'Nginx configuration validation failed.\n' >&2
  compose logs --tail=100 nginx >&2
  exit 1
fi

printf 'Deployment verified successfully.\n'
printf 'Services are running:\n'
compose ps
