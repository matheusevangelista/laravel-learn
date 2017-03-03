# lavarel-learn

## CRIANDO UM NOVO PROJETO ##
composer create-project --prefer-dist laravel/laravel blog

## INICIA-SE O SERVER LOCAL ##
php artsian serve

## ADICIONANDO AUTENTICAÇÃO ##
php artisan make:auth

## SETUP DE BANCO DE DADOS ##
Arquivo .env

## CRIANDO A MIGRAÇÃO ESPECIFICANDO O NOME DA TABELA ##
php artisan make:migration create_tasks_table --create=tasks

## EXECUTANDO A MIGRAÇÃO ##
php artisan migrate

## ALTEROU OS CAMPOS DA MIGRAÇÃO E DESEJA ATUALIZAR O BANCO DE DADOS ##
php artisan migrate:refresh

## ROLLBACK EM TODAS AS MIGRAÇÕES ##
php artisan migrate:reset

## SETTING DEFAULT ENCODE IN MIGRATIONS ##
$table->charset = 'utf8';

$table->collation = 'utf8_unicode_ci';

## CRIANDO UM MODEL ##
php artisan make:model Task
(Task) Model no singular

## CRIAND UM MODEL COM MIGRAÇÃO ##
php artisan make:model Commment -m

## CRIANDO UMA CONTROLLER ##
php artisan make:controller TasksController

## CRIANDO UMA CONTROLLER COM MÉTODOS DO CRUD ##
php artisan make:controller TasksController -r

## FIXING BUGS DE REFERÊNCIAS DE ARQUIVOS REMOVIDOS ##
composer dump-autoload

## GERANDO NOVA KEY DE APLICACAO ##
php artisan key:generate

## RECOLHENDO ASSETS DA RESOURCE E MIGRANDO PARA A PASTA PUBLIC ##
npm run dev

<dev> nome do comando presente em package.json
Disponíveis:
 - dev
 - watch
 - hot
 - production

Para configurar os arquivos a serem recolhidos, modificar o webpack.mix.js

https://laravel.com/docs/5.4/mix