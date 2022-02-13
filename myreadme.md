installation
composer create-project symfony/skeleton:"^5.4" symfony5_todo_api
composer require api
composer require maker --dev
#generer entity
    php .\bin\console  doctrine:database:create
    php .\bin\console make:entity
    php bin/console make:migration
    php bin/console doctrine:migrations:migrate
#run
symfony serve