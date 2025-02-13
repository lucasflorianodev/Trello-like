FROM php:8.2-apache
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-configure zip \
    && docker-php-ext-install pdo pdo_pgsql zip
USER COMPOSER_ALLOW_SUPERUSER 1
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY . .
RUN docker-php-ext-install pdo pdo_pgsql
RUN composer install --no-dev --optimize-autoloader
RUN chmod -R 777 storage bootstrap/cache
EXPOSE 80
CMD ["apache2-foreground"]
