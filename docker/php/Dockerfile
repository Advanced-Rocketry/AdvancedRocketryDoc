FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

# Create non-root user
RUN addgroup -g 1000 www && \
    adduser -u 1000 -G www -s /bin/sh -D www

# Security: disable dangerous functions
RUN echo "disable_functions = passthru,system,exec,shell_exec,proc_open,proc_close" >> /usr/local/etc/php/conf.d/security.ini

# Copy application files
COPY --chown=www:www . /var/www/html

USER www
