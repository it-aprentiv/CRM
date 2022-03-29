FROM php:7.4-fpm
RUN apt update
RUN apt -y install git libpng-dev libzip-dev libjpeg-dev
RUN docker-php-ext-configure \
        # ref: https://github.com/docker-library/php/issues/920#issuecomment-562864296
        gd --enable-gd --with-jpeg &&\ 
        docker-php-ext-install pdo_mysql zip gd


COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
CMD composer install ;  php-fpm
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" 
EXPOSE 9000
