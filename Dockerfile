FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html/

# Set proper ownership and permissions
RUN chown -R www-data:www-data /var/www/html

# Configure Apache port dynamically for Render (Render sets $PORT env var, default 10000 or 80)
ENV PORT=80
RUN sed -i "s/Listen 80/Listen \${PORT}/g" /etc/apache2/ports.conf && \
    sed -i "s/<VirtualHost \*:80>/<VirtualHost \*:\${PORT}>/g" /etc/apache2/sites-available/000-default.conf

# Allow .htaccess overrides
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

EXPOSE 80
