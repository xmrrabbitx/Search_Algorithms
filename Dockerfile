FROM php:8.1-apache

#copy your own php.ini to specific version
COPY ./php.ini /etc/php/8.1/apache2/php.ini

RUN a2enmod rewrite


RUN docker-php-ext-install mysqli
RUN pecl install redis
RUN docker-php-ext-enable redis

RUN service apache2 restart