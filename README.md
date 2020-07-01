**dostavkalenta.ru**

env example fields to change:


average installation recomendations:
APP_URL=http://shop.loc
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shop
DB_USERNAME=root
DB_PASSWORD=root

composer install
npm install

php artisan key:generate
php artisan migrate