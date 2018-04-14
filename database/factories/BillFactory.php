<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'account_no' => $faker->numberBetween($min = 1000, $max = 9000),
      'invoice_date' => $faker->text(5),
      'invoice_no' => $faker->numberBetween($min = 1000, $max = 9000),
      'invoice_summary' => $faker->numberBetween($min = 1000, $max = 9000),
    ];
});
