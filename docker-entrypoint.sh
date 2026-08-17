#!/bin/sh
set -e

php artisan migrate --force
php artisan db:seed --force
[ -L public/storage ] || php artisan storage:link

exec apache2-foreground
