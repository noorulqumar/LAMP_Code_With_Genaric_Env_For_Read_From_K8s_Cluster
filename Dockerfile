# Use the official PHP Apache image as the base image
FROM php:apache


# Install MySQL client and required libraries
RUN apt-get update \
    && apt-get install -y default-mysql-client \
    && docker-php-ext-install mysqli pdo_mysql


# Additional configurations, if needed
# ...

# Set working directory
WORKDIR /var/www/html

# Copy your PHP application files to the container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80

# Command to run the Apache server
CMD ["apache2-foreground"]