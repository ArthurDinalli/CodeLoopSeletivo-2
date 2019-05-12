

## Instalação

É necessário ter instalado o servidor Apache com PHP (a versao utilizada no desenvolvimento foi 7.1.28), MySQL e o Composer.

git clone https://github.com/ArthurDinalli/CodeLoopSeletivo-2.git

cd CodeLoopSeletivo-2

composer install

mv .env.example .env

criar um banco de dados (da sua preferência)

Preencher os campos DB_DATABASE, DB_USERNAME, DB_PASSWORD no arquivo .env

php artisan migrate

php artisan serve


