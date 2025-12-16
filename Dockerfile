# Usamos una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instalamos extensiones comunes si usas base de datos (MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiamos tus archivos al servidor
COPY . /var/www/html/

# Le decimos a Render que use el puerto 80
EXPOSE 80
