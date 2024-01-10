FROM php:8.3.1-fpm
WORKDIR "/app"

# Update
RUN apt-get update

# Install ZIP
RUN apt-get install -y libzip-dev zip

# Install PHP extensions
RUN docker-php-ext-install zip pdo pdo_mysql mysqli

# Install Redis
RUN pecl install -o -f redis && docker-php-ext-enable redis

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install xdebug
RUN pecl install xdebug-3.3.1 && docker-php-ext-enable xdebug

# Cleanup
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
