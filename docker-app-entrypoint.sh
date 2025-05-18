#!/bin/sh

# Set correct permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database /var/www/html/public
php artisan migrate --force
chown www-data:www-data database.sqlite
chmod 666 database.sqlite
chmod 755 /var/www/html/storage/logs
chmod 755 /var/www/html/storage/framework
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize:clear
php artisan optimize
php artisan key:generate --force
php artisan storage:link
php artisan migrate --force


# Start PHP-FPM (this replaces the script process)
exec php-fpm