<?php

use Faker\Generator as Faker;

$factory->define(App\Payment::class, function (Faker $faker) {
    return [
        'payment_amount'=>$faker->numberBetween($min = 1, $max = 9999),
        'payment_date'=>$faker->dateTimeBetween($startDate = "now", $endDate = "30 days"),
        'payment_no'=>$faker->numberBetween($min = 1, $max = 30),
        'payment_detail'=>$faker->numberBetween($min = 1, $max = 30),
    ];
});
