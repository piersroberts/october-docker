cd october
composer.phar install
php artisan october:up
php artisan october:mirror ../www/
symlinks -cr ../www
echo 'ALL DONE'