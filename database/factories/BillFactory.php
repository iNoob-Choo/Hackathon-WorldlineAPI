<?php

use Faker\Generator as Faker;

$factory->define(App\Bill::class, function (Faker $faker) {
    return [
      'account_no' => $faker->numberBetween($min = 1000, $max = 9000),
      'invoice_date' => $faker->dateTimeBetween($startDate = "now", $endDate = "30 days"),
      'invoice_no' => $faker->numberBetween($min = 1000, $max = 9000),
      'invoice_summary' => $faker->numberBetween($min = 1000, $max = 9000),
      //'payment_id'=>$faker->unique()->numberBetween($min = 1, $max = 25),
      'account_id'=>$faker->numberBetween($min = 1, $max = 3),
    ];
});
