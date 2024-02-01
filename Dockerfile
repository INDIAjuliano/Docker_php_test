FROM php:8.0-apache
WORKDIR /var/www/html

# PHP
RUN apt-get update -y && apt-get upgrade -y 
RUN apt-get install -y libmariadb-dev
RUN docker-php-ext-install mysqli
