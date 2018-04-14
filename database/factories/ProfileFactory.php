<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'gender' => $faker->text(1),
      'first_name' => $faker->text(5),
      'last_name' => $faker->text(5),
      'age' => $faker->numberBetween($min = 10, $max = 60),
      'address' =>$faker->text(30),
      'country' => $faker->text(8),
    ];
});
