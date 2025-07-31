FROM php:8.2-apache

# Install dependencies dan ekstensi PHP
RUN apt-get update && apt-get install -y \
    curl \
    libzip-dev zip unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

# Aktifkan mod_rewrite untuk Laravel
RUN a2enmod rewrite

# Set dokumen root ke /public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Salin seluruh project
COPY . .

# Install dependency Laravel
RUN composer install

# Permission untuk Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
