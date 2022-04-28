FROM php:7.1-apache
WORKDIR /var/www/html

RUN docker-php-ext-install mysqli pdo pdo_mysql
