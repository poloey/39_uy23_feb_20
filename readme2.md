## to install laravel 

~~~bash
composer create-project laravel/laravel <foldername>
composer create-project laravel/laravel --prefer-dist <foldername>
~~~

## to serve laravel

~~~bash
php artisan serve
~~~

## to make authentication 

~~~bash
php artisan make:auth
~~~

## database connection
Inside .env file we will add database credentials

## to use get route 

~~~php
Route::get('/path', 'controller@function');
eg:
Route::get('/about', 'PageController@about');
~~~

## to make controller 

~~~bash
php artisan make:controller <controllerName>
eg:
php artisan make:controller PageController
~~~

## to return view from controller 

~~~php
view('blade_file_location');
eg:
view('about')
~~~

## to pass variable to view from controller 

~~~php
view('about')->with('teachers', $teachers);
# or
view('about')->withTeachers($teachers);
# or
view('about', ['teachers' => $teachers]);
# or
view('about', compact('teachers'));
~~~

## create a migration 

~~~bash
php artisan make:migration <migrationName>
eg:
php artisan make:migration create_teachers_table
~~~

## migrate migration file

~~~bash
php artisan migrate
~~~

## adding seeder for migration

~~~bash
php artisan make:seeder <seedername>
eg:
php artisan make:seeder <TeachersTableSeeder>
~~~

## 









