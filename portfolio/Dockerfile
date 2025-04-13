# Utiliser l'image officielle PHP avec Apache
FROM php:8.0-apache

# Mettre à jour les paquets et installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    pkg-config \
    && docker-php-ext-install pdo_sqlite

# Activer le module rewrite pour Apache
RUN a2enmod rewrite

# Copier tous les fichiers et dossiers du projet dans le conteneur
COPY portfolio /var/www/html

# Copier le fichier portfolio.db depuis le dossier public
COPY portfolio/public/portfolio.db /var/www/html/portfolio.db

# Donner les permissions nécessaires pour le fichier de base de données
RUN chmod 644 /var/www/html/portfolio.db && \
    chown www-data:www-data /var/www/html/portfolio.db

# Toujours créer le fichier .htaccess avec un contenu par défaut (s'il n'existe pas déjà)
RUN echo "DirectoryIndex index.php\nRewriteEngine On\nRewriteCond %{REQUEST_FILENAME} !-f\nRewriteCond %{REQUEST_FILENAME} !-d\nRewriteRule ^(.*)$ index.php [L]" > /var/www/html/public/.htaccess

# Configurer le répertoire public comme racine
WORKDIR /var/www/html/public

# Modifier la configuration d'Apache pour définir "public/" comme DocumentRoot
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Donner les permissions nécessaires à tous les fichiers copiés
RUN chmod -R 755 /var/www/html && \
    chown -R www-data:www-data /var/www/html

# Exposer le port 80 pour Apache
EXPOSE 80

# Lancer le serveur Apache
CMD ["apache2-foreground"]
