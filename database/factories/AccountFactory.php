<?php

use Faker\Generator as Faker;

$factory->define(App\Account::class, function (Faker $faker) {
    return [
        //
        'account_type' => $faker->text(5),
        'account_no' => $faker->numberBetween($min = 1000, $max = 9000),
        'currency' => $faker->randomLetter(3),
        'min_balance' => $faker->numberBetween($min = 1000, $max = 9000),
        'current_balance' =>$faker->numberBetween($min = 1000, $max = 9000),
        'available_balance' => $faker->numberBetween($min = 1000, $max = 9000),
        'profile_id' =>$faker->numberBetween($min = 1, $max = 10),
    ];
});
