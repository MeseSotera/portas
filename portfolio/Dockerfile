FROM php:8.0-apache

# Mettre à jour les paquets et installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    pkg-config \
    && docker-php-ext-install pdo_sqlite

# Activer le module rewrite pour Apache
RUN a2enmod rewrite

# Copier tous les fichiers et dossiers du projet dans le conteneur
COPY . /var/www/html/

# Configurer le dossier public comme racine (optionnel pour MVC)
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Créer le fichier .htaccess si nécessaire
RUN echo "DirectoryIndex index.php\nRewriteEngine On\nRewriteCond %{REQUEST_FILENAME} !-f\nRewriteCond %{REQUEST_FILENAME} !-d\nRewriteRule ^(.*)$ index.php [L]" > /var/www/html/public/.htaccess

# Donner les permissions nécessaires
RUN chmod -R 755 /var/www/html && \
    chown -R www-data:www-data /var/www/html

# Exposer le port par défaut d'Apache
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]
