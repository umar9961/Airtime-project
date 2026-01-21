#!/usr/bin/env bash

php artisan migrate --force
php artisan config:clear
php artisan cache:clear
php artisan view:clear

chmod -R 775 storage bootstrap/cache

php -S 0.0.0.0:$PORT -t public
