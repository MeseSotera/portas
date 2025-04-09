FROM php:8.0-apache

# Mettre à jour les paquets et installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    pkg-config \
    && docker-php-ext-install pdo_sqlite

# Activer le module rewrite pour Apache
RUN a2enmod rewrite

# Copier tout le contenu du projet dans le conteneur
COPY . /var/www/html/

# Créer le répertoire public s'il n'existe pas
RUN mkdir -p /var/www/html/public

# Configurer Apache pour que le répertoire public soit la racine
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Ajouter une configuration Apache pour s'assurer que le fichier index.php est utilisé par défaut
RUN echo "<Directory /var/www/html/public>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
    DirectoryIndex index.php index.html
</Directory>" > /etc/apache2/conf-available/public.conf && \
    a2enconf public

# Donner les permissions nécessaires
RUN chmod -R 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Exposer le port par défaut d'Apache
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]
