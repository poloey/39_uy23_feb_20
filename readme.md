## to install laravel 

~~~bash
composer create-project laravel/laravel <foldername>
# or
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

## Dummy seeding for teachers table 

~~~php
use Faker\Factory;
use App\Teacher;

$faker = Factory::create();
foreach(range(1, 100) as $i) {
Teacher::create([
  'name' => $faker->name,
  'email' => $faker->email
]);
}

~~~


## adding seeder file into database seeder class 

~~~php
$this->call(TeachersTableSeeder::class);
~~~

## seeding into database

~~~php
php artisan db:seed
~~~



## how to add default string length 

Go to AppServiceProvider and write following inside boot function 
~~~
Schema::defaultStringLength(191);
~~~

## how to make a model 

~~~bash
php artisan make:model <modelName>
eg:
php artisan make:model User
~~~

## blade templating  101

* file name extension will be `.blade.php`
* for variable content use `@yield` directive like @yield('content')
* for extending master use `@extends` directive
* for using variable section use `@section` directive  
~~~php
@extends('master')
@section('content')
@endsection
~~~

* foreach directive in blade

~~~php
@foreach($teachers as $teacher)
<tr>
  <td>{{$teacher->id}}</td>
  <td>{{$teacher->name}}</td>
  <td>{{$teacher->email}}</td>
</tr>
@endforeach
~~~

## paginate in laravel

~~~
# inside controller
$teachers = Teacher::paginate(10);
# inside blade views
{{ $teachers->links() }}
~~~











