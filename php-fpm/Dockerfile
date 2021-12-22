FROM php:7.4-fpm
RUN apt update
RUN apt -y install git libpng-dev libzip-dev
RUN docker-php-ext-install pdo_mysql gd zip

COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
CMD composer install ;  php-fpm 
EXPOSE 9000