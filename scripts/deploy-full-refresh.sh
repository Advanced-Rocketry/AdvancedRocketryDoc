#!/usr/bin/env bash
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

exec "${BASH:-bash}" "${SCRIPT_DIR}/deploy.sh" --full-refresh "$@"
