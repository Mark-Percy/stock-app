FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

RUN apk update && apk add --no-cache \
    git \
    zip \
    unzip \
    libzip-dev \
    oniguruma-dev

RUN docker-php-ext-install pdo pdo_mysql zip mbstring

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .
COPY php.ini /usr/local/etc/php/php.ini

RUN composer install --no-dev --optimize-autoloader

EXPOSE 9000

CMD ["php-fpm"]