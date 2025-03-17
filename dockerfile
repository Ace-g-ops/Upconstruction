# Use an official PHP runtime as a parent image
FROM php:8.1-apache # Or your desired php version and webserver

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Copy composer.lock and composer.json
COPY composer.lock composer.json ./

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy the Laravel application
COPY . .

# Set permissions for storage and bootstrap/cache directories
RUN chmod -R 775 storage bootstrap/cache

# Expose port 10000 (Render requirement)
EXPOSE 10000

# Configure Apache to listen on port 10000
RUN sed -i 's/80/10000/g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Start Apache
CMD ["apache2-foreground"]




