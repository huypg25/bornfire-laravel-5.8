
## REQUIREMENTS<br>

<strong>PHP 7.4.23 </strong><br>
npm<br>
mysql<br>
nodejs<br><br>





## SETUP FOR LINUX<br>

git clone https://github.com/huypg25/bornfire-laravel-5.8.git<br>
cd bornfire-laravel-5.8/<br>
php composer.phar install<br>
php composer.phar dump-autoload<br><br>

npm install cross-env<br>
npm run dev<br><br>

Create new database and change variables in .env<br>

DB_DATABASE=<br>
DB_USERNAME=<br>
DB_PASSWORD=<br><br>

php artisan key:generate<br>
php artisan migrate<br>
php artisan db:seed<br>
php artisan storage:link<br>
chmod -R 777 /storage <br><br>


http://127.0.0.1:8000/admin<br>
username : admin@admin.com<br>
password : password<br>
