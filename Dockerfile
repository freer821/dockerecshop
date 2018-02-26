FROM php:5.6-apache
RUN docker-php-ext-install mysql mysqli

RUN apt-get update -y && apt-get install -y sendmail libpng-dev

RUN apt-get update && \
    apt-get install -y \
        zlib1g-dev 

RUN docker-php-ext-install mbstring

RUN docker-php-ext-install zip

RUN docker-php-ext-install gd

COPY vhost/000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY src/ /var/www/html/
RUN chmod -R 777 /var/www/html/