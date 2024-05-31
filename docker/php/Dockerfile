FROM php:8.3.4-apache-bullseye

RUN docker-php-ext-install mysqli

WORKDIR /var/www/html

COPY index.php .
RUN a2enmod rewrite
 