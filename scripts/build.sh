#! /bin/sh
echo ' - starting building'
composer.phar install
php artisan october:up
php artisan october:mirror ../www/
symlinks -cr ../www
echo ' - finished building'