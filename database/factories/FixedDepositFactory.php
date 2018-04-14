<?php

use Faker\Generator as Faker;

$factory->define(App\FixedDeposit::class, function (Faker $faker) {
    return [
        'account_no' =>$faker->numberBetween($min = 1000, $max = 9000),
        'balance' =>$faker->numberBetween($min = 1000, $max = 9000),
        'tenure_duration' =>$faker->numberBetween($min = 1, $max = 30),
        'account_type' =>$faker->text(5),
        'currency'	=>$faker->randomLetter(3),
        'current_balance' =>$faker->numberBetween($min = 1000, $max = 9000),
        'available_balance' => $faker->numberBetween($min = 1000, $max = 9000),
        'maturity_date' => $faker->dateTimeBetween($startDate = "now", $endDate = "30 days"),
        'interest_rate' =>$faker->numberBetween($min = 1, $max = 30),
        'account_id' =>$faker->numberBetween($min = 1, $max = 10),
    ];
});
