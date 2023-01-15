    #FROM php:fpm
    #RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql


# FROM php:7.4-fpm
# RUN apt-get -y update
# RUN curl -L -C - --progress-bar -o /usr/local/bin/composer https://getcomposer.org/composer.phar
# RUN chmod 755 /usr/local/bin/composer
# RUN apt-get install -y git mc
# RUN docker-php-ext-install pdo_mysql mysqli
# RUN pecl install xdebug-2.9.6 && docker-php-ext-enable xdebug


FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxml2-dev \
    libxslt1-dev

RUN docker-php-ext-configure gd --with-freetype --with-jpeg

RUN docker-php-ext-install -j$(nproc) \
    pdo_pgsql \
    pgsql \
    intl \
    gd \
    xsl \
    zip \
    opcache \
    soap \
    bcmath \
    sockets \
    pcntl \
    exif \
    iconv \
    mbstring \
    xml

RUN pecl install redis \
    && docker-php-ext-enable redis

COPY php.ini /usr/local/etc/php/php.ini

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

USER www-data

WORKDIR /var/www/html

EXPOSE 9000

CMD ["php-fpm"]
