FROM php:8.1-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql php-mysqlnd && docker-php-ext-enable pdo_mysql
COPY ./ /var/www/html/
