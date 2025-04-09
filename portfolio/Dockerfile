FROM php:8.0-apache

# Met à jour les paquets et installe les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    pkg-config \
    && docker-php-ext-install pdo_sqlite

# Active le module rewrite pour Apache
RUN a2enmod rewrite

# Copie le contenu entier du projet dans le conteneur
COPY . /var/www/html/

# Configurer le dossier public comme racine
WORKDIR /var/www/html/public

# Modifier la configuration Apache pour définir "public/" comme racine
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Donner les permissions nécessaires
RUN chmod -R 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Expose le port 80
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]
