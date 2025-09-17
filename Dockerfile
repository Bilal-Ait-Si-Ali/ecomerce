FROM php:8.2-apache

# Enable Apache rewrite
RUN a2enmod rewrite

# Install system packages & PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql zip gd
RUN docker-php-ext-install calendar

# Set working directory
WORKDIR /var/www/html

# Copy Laravel app code
COPY . /var/www/html

# Copy Apache virtual host config
COPY apache/laravel.conf /etc/apache2/sites-available/000-default.conf

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Copy composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN composer install

# Create Laravel storage symlink
RUN php artisan storage:link 