FROM php:8.2-fpm-alpine

WORKDIR /var/www/laravel

RUN apk update && apk add --no-cache \
    freetype \
    libpng \
    libjpeg-turbo \
    libwebp \
    libxpm \
    freetype-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    libxpm-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql exif \
    && apk del --no-cache freetype-dev libpng-dev libjpeg-turbo-dev libwebp-dev libxpm-dev
