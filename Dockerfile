FROM php:7.4-apache
RUN apt-get update

RUN docker-php-ext-install mysqli

RUN apt-get install -y autoconf pkg-config libssl-dev
RUN pecl channel-update pecl.php.net
RUN pecl install mongodb && docker-php-ext-enable mongodb
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini

RUN pecl install xdebug  
RUN docker-php-ext-enable xdebug

RUN echo 'xdebug.remote_enable = ${XDEBUG_ENABLED}' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.remote_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

COPY ./src/start-container.sh /var/www/html/start-container.sh