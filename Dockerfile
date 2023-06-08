FROM php:latest
WORKDIR /var/www/html
COPY . /var/www/html

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN apt-get update && apt-get install -y libz-dev libmemcached-dev && rm -r /var/lib/apt/lists/*
RUN pecl install memcached
RUN echo extension=memcached.so >> /usr/local/etc/php/conf.d/memcached.ini
