FROM nginx:1.27-alpine

# Security: create non-root user
RUN addgroup -g 1000 www && \
    adduser -u 1000 -G www -s /bin/sh -D www

# Remove default config
RUN rm -f /etc/nginx/conf.d/default.conf

# Copy custom configuration
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Copy application files with proper ownership
COPY --chown=www:www . /var/www/html

# Reduce attack surface: drop capabilities
RUN touch /var/run/nginx.pid && \
    chown -R www:www /var/run/nginx.pid /var/cache/nginx /var/log/nginx

USER www
