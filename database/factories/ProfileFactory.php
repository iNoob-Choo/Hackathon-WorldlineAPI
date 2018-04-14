<?php

use Faker\Generator as Faker;
use App\Profile;

$factory->define(Profile::class, function (Faker $faker) {
    return [
      'gender' => $faker->randomLetter(1),
      'first_name' => $faker->text(10),
      'last_name' => $faker->text(10),
      'age' => $faker->numberBetween($min = 10, $max = 60),
      'address' =>$faker->text(30),
      'country' => $faker->text(8),
      'email'=>$faker->email,
    ];
});
