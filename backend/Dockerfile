FROM php:fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql


# FROM php:7.4-fpm
# RUN apt-get -y update
# RUN curl -L -C - --progress-bar -o /usr/local/bin/composer https://getcomposer.org/composer.phar
# RUN chmod 755 /usr/local/bin/composer
# RUN apt-get install -y git mc
# RUN docker-php-ext-install pdo_mysql mysqli
# RUN pecl install xdebug-2.9.6 && docker-php-ext-enable xdebug