#!/usr/bin/env bash
set -euo pipefail

if [[ "${EUID}" -ne 0 ]]; then
  echo "Please run this script as root with sudo."
  exit 1
fi

if [[ ! -f "compose.yml" ]]; then
  echo "Run this script from the project directory that contains compose.yml."
  exit 1
fi

prompt_default() {
  local prompt="$1"
  local default_value="$2"
  local reply
  read -r -p "$prompt [$default_value]: " reply
  if [[ -z "$reply" ]]; then
    reply="$default_value"
  fi
  printf '%s' "$reply"
}

DOMAIN="$(prompt_default "Domain to serve this site on" "docs.example.com")"
if [[ ! "${DOMAIN}" =~ ^[A-Za-z0-9.-]+$ ]]; then
  echo "Domain contains unsupported characters: ${DOMAIN}"
  exit 1
fi

prompt_yes_no() {
  local prompt="$1"
  local default_value="$2"
  local reply
  local normalized_default
  normalized_default="$(printf '%s' "$default_value" | tr '[:upper:]' '[:lower:]')"

  while true; do
    read -r -p "$prompt [$default_value]: " reply
    if [[ -z "$reply" ]]; then
      reply="$normalized_default"
    fi
    reply="$(printf '%s' "$reply" | tr '[:upper:]' '[:lower:]')"
    case "$reply" in
      y|yes) return 0 ;;
      n|no) return 1 ;;
    esac
    echo "Please answer yes or no."
  done
}

LETSENCRYPT_EMAIL="$(prompt_default "Email for Let's Encrypt expiry notices" "admin@${DOMAIN}")"
ENABLE_HTTPS=false
if prompt_yes_no "Request and install a Let's Encrypt certificate now" "yes"; then
  ENABLE_HTTPS=true
fi

SITE_NAME="${DOMAIN//[^a-zA-Z0-9.-]/-}"
NGINX_AVAILABLE="/etc/nginx/sites-available/${SITE_NAME}.conf"
NGINX_ENABLED="/etc/nginx/sites-enabled/${SITE_NAME}.conf"

echo
echo "Installing required packages..."
apt-get update
apt-get install -y ca-certificates curl gnupg lsb-release nginx certbot python3-certbot-nginx

if [[ ! -f /etc/os-release ]]; then
  echo "Unsupported Linux distribution: /etc/os-release not found."
  exit 1
fi

. /etc/os-release

if [[ "${ID}" != "ubuntu" && "${ID}" != "debian" ]]; then
  echo "This installer currently supports Ubuntu and Debian."
  exit 1
fi

if ! command -v docker >/dev/null 2>&1 || ! docker compose version >/dev/null 2>&1; then
  install -m 0755 -d /etc/apt/keyrings
  if [[ ! -f /etc/apt/keyrings/docker.gpg ]]; then
    curl -fsSL "https://download.docker.com/linux/${ID}/gpg" | gpg --dearmor -o /etc/apt/keyrings/docker.gpg
    chmod a+r /etc/apt/keyrings/docker.gpg
  fi

  echo \
    "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/${ID} ${VERSION_CODENAME} stable" \
    > /etc/apt/sources.list.d/docker.list

  apt-get update
  apt-get install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin
fi

systemctl enable --now docker
systemctl enable --now nginx

echo
echo "Building and starting the container..."
docker compose up -d --build

echo
echo "Writing nginx config for ${DOMAIN}..."
sed "s/__DOMAIN__/${DOMAIN}/g" nginx.site.conf.template > "${NGINX_AVAILABLE}"
ln -sfn "${NGINX_AVAILABLE}" "${NGINX_ENABLED}"

if [[ -L /etc/nginx/sites-enabled/default ]]; then
  rm -f /etc/nginx/sites-enabled/default
fi

nginx -t
systemctl reload nginx

if [[ "${ENABLE_HTTPS}" == "true" ]]; then
  echo
  echo "Requesting Let's Encrypt certificate for ${DOMAIN}..."
  certbot --nginx \
    --non-interactive \
    --agree-tos \
    --email "${LETSENCRYPT_EMAIL}" \
    --redirect \
    -d "${DOMAIN}"
fi

echo
echo "Deployment complete."
if [[ "${ENABLE_HTTPS}" == "true" ]]; then
  echo "Site: https://${DOMAIN}"
else
  echo "Site: http://${DOMAIN}"
fi
echo "Container port binding: 127.0.0.1:8080 -> container:80"
