<?php

use App\Teacher;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();
      foreach(range(1, 100) as $i) {
        Teacher::create([
          'name' => $faker->name,
          'email' => $faker->email
        ]);
      }
    }
}
