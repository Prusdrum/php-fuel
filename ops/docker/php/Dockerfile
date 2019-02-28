FROM php:7.2-fpm

# Install composer
RUN apt-get update \
    && apt-get install git-core -y \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

