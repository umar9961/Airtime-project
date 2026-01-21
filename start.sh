#!/usr/bin/env bash

php artisan key:generate --force || true
php artisan migrate --force || true
php artisan config:clear
php artisan cache:clear
php artisan view:clear

chmod -R 775 storage bootstrap/cache

php -S 0.0.0.0:$PORT -t public
