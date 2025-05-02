# Base image
FROM php:7.4-apache
RUN docker-php-ext-install mysqli

# set working directory
WORKDIR /var/www/html

# copy files
COPY . .

# exposing
EXPOSE 80