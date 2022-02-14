FROM php:apache

COPY totalusers.php /var/www/html

RUN docker-php-ext-install mysqli
RUN chown www-data:www-data /var/www/html
RUN chmod 774 /var/www/html
