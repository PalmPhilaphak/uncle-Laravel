# Step 1: Use the official PHP image as a base
FROM php:8.1-fpm

# Step 2: Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    libssl-dev \
    libcurl4-openssl-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql opcache

# Step 3: Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Step 4: Set the working directory to /var/www
WORKDIR /var/www

# Step 5: Copy the Laravel application into the container
COPY . .

# Step 6: Install Laravel dependencies using Composer
RUN composer install --optimize-autoloader --no-dev

# Step 7: Set permissions for Laravel storage and bootstrap/cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Step 8: Expose port 9000 and start the PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
