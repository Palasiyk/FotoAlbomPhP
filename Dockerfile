FROM php:7.2-apache
COPY . /var/www/html
WORKDIR /var/www/html
EXPOSE 80
#CMD [ "php", "./index.php" ]






