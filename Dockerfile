# Use official PHP image with Apache
FROM php:8.2-apache

# Copy your app into Apache's web root
COPY . /var/www/html/

# Expose port 80
EXPOSE 80