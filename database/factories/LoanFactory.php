<?php

use Faker\Generator as Faker;

$factory->define(App\Loan::class, function (Faker $faker) {
    return [
        'loan_amount' =>$faker->numberBetween($min = 1000, $max = 9999),
        'loan_type' =>$faker->text(5),
        'account_id'=>$faker->numberBetween($min = 1, $max = 3),
    ];
});
