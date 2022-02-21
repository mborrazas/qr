FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod rewrite

RUN apt-get update && apt-get install -y  git zlib1g-dev libmemcached-dev systemd memcached
RUN apt-get install -y libz-dev libmemcached-dev && \
    pecl install memcache && \
    docker-php-ext-enable memcache
COPY virtualhost.conf /etc/apache2/sites-enabled/000-default.conf
