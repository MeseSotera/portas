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

# Vérifier si index.php existe, sinon créer un fichier par défaut
RUN [ -f /var/www/html/public/index.php ] || echo "<?php echo 'Bienvenue sur votre application MVC';" > /var/www/html/public/index.php

# Copier le fichier de configuration Apache dans le conteneur
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Donner les permissions nécessaires pour Apache
RUN chmod -R 755 /var/www/html && \
    chown -R www-data:www-data /var/www/html

# Exposer le port par défaut d'Apache
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]
