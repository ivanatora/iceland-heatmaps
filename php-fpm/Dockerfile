FROM php:7-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
#        libpq-dev \
#        libzip-dev \
        libicu-dev \
#        libfreetype6-dev \
#        libjpeg62-turbo-dev \
#        libpng12-dev \
#        libwebp-dev \
#    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ \
#        --with-jpeg-dir=/usr/include/ \
#        --with-png-dir=/usr/include/ \
#    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install intl \
    && rm -rf /var/lib/apt/lists/*


ADD symfony.ini /etc/php7.0/fpm/conf.d/
ADD symfony.ini /etc/php7.0/cli/conf.d/

ADD symfony.pool.conf /etc/php7.0/fpm.d/

CMD ["php-fpm"]
#CMD ["php-fpm", "-F"]
#CMD bash

WORKDIR /var/www/symfony
EXPOSE 9000
