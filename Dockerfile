FROM php:8.2-fpm

# Install dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    zip \
    curl \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Create a custom php.ini
RUN cp "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Set PHP configurations directly
RUN echo "upload_max_filesize = 64M" >> "$PHP_INI_DIR/php.ini" \
    && echo "post_max_size = 64M" >> "$PHP_INI_DIR/php.ini" \
    && echo "memory_limit = 256M" >> "$PHP_INI_DIR/php.ini" \
    && echo "max_execution_time = 600" >> "$PHP_INI_DIR/php.ini" \
    && echo "max_input_time = 600" >> "$PHP_INI_DIR/php.ini"

# Set the working directory
WORKDIR /var/www/html

# Expose the port PHP-FPM listens on
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
