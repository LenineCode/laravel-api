FROM php:8.0-fpm
WORKDIR /app

COPY ./www.conf /usr/local/etc/php-fpm.d/www.conf

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update -qq && \
    apt-get install -qy \
    git \
    gnupg \
    unzip \
    zip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN docker-php-ext-install pdo pdo_mysql
