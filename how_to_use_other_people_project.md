## composer install

~~~php
composer install 
~~~

## .env file setup

make `.env` file and copy all contents from .env.example file. and changed database credentials.  


## basic command for key genarate and clear old setting
~~~php
php artisan key:generate
php artisan config:clear
php artisan cache:clear
~~

## migrating database 

~~~bash
php artisan migrate
~~~

## seed database with dummy data

~~~bash
php artisan db:seed
~~~

## serving project 

~~~bash
php artisan serve
~~~



