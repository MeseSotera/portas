FROM php:8.0-apache

# Mettre à jour les paquets et installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    pkg-config \
    && docker-php-ext-install pdo_sqlite

# Activer le module rewrite pour Apache
RUN a2enmod rewrite

# Copier tous les fichiers dans le conteneur
COPY . /var/www/html

# Créer le répertoire public si ce n'est pas déjà fait
RUN mkdir -p /var/www/html/public

# Toujours créer le fichier .htaccess avec un contenu par défaut (écrasera s'il existe déjà)
RUN echo "DirectoryIndex index.php\nRewriteEngine On\nRewriteCond %{REQUEST_FILENAME} !-f\nRewriteCond %{REQUEST_FILENAME} !-d\nRewriteRule ^(.*)$ index.php [L]" > /var/www/html/public/.htaccess

# Copier le contenu personnalisé dans le fichier index.php
RUN echo "<?php \n\
\n\
session_start();\n\
\n\
\$path = \$_SERVER['REQUEST_SCHEME'].\"://\".\$_SERVER['SERVER_NAME'].\$_SERVER['PHP_SELF'];\n\
\$root = str_replace(\"index.php\", \"\",\$path);\n\
\n\
define('ROOT', \$root);\n\
define('ASSETS', \$root . \"assets/\");\n\
\n\
include \"../app/init.php\";\n\
\n\
\$router = new Router();" > /var/www/html/public/index.php

# Configurer le dossier public comme racine
WORKDIR /var/www/html/public

# Modifier la configuration Apache pour définir "public/" comme racine
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Donner les permissions nécessaires
RUN chmod -R 755 /var/www/html
RUN chmod 644 /var/www/html/public/.htaccess
RUN chmod 644 /var/www/html/public/index.php
RUN chown -R www-data:www-data /var/www/html

# Exposer le port par défaut d'Apache
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]
