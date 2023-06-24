FROM php:7.4-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY ./web/ /var/www/html/
COPY ./apache2.txt /etc/apache2/apache2.conf
RUN mkdir -p /var/log/test 
RUN chmod 777 /var/log/test
COPY ./envvars.sh /etc/apache2/envvars
RUN a2enmod rewrite
CMD ["apache2-foreground"]
