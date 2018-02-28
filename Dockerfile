FROM php:5.6-apache
RUN docker-php-ext-install mysql mysqli

COPY vhost/upload.ini /usr/local/etc/php/conf.d/upload.ini
COPY vhost/000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY src/ /var/www/html/
RUN chmod -R 777 /var/www/html/