#!/bin/sh
set -e

# The SQLite file isn't committed to the repo, so it gets created fresh by
# this script (running as root) on every boot. Own it before migrating so
# Apache's www-data workers can still write to it afterwards.
mkdir -p database
touch database/database.sqlite
chown -R www-data:www-data database
chmod -R 775 database

php artisan migrate --force
php artisan db:seed --force
[ -L public/storage ] || php artisan storage:link
chown -R www-data:www-data storage bootstrap/cache database

exec apache2-foreground
