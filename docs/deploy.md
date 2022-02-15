composer require symfony/requirements-checker
composer dump-env prod --empty
composer install --no-dev --optimize-autoloader
APP_ENV=prod APP_DEBUG=0 php bin/console cache:clear

//rewrite url
composer require symfony/apache-pack
//install ca
symfony server:ca:install
//change php v
echo 7.4 > .php-version
//creer une entity
