# Use an official PHP runtime as a parent image
FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip mbstring

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy existing application directory contents
COPY . .

# Set file permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 storage bootstrap/cache



# Expose port 8000
EXPOSE 8000

# Use a non-root user for security
USER www-data

# Run migrations and start Laravel
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000
