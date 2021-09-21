
## SETUP FOR LINUX

git clone https://github.com/huypg25/bornfire-laravel-5.8.git
cd bornfire-laravel-5.8/
php7 composer.phar install
php7 composer.phar dump-autoload

npm install cross-env
npm run dev

Create new database and change variables in .env

DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
chmod -R 777 /storage 


http://127.0.0.1:8000/admin
username : admin@admin.com
password : password
