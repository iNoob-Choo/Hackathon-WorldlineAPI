<?php

use Faker\Generator as Faker;

$factory->define(App\Payee::class, function (Faker $faker) {
    return [
        'payee_name'=>$faker->text(10),
        'payee_detail'=>$faker->text(10),
        'payee_no'=>$faker->numberBetween($min = 1, $max = 10),
        'payee_account_no'=>$faker->numberBetween($min = 1, $max = 10),
        'account_id'=>$faker->numberBetween($min = 1, $max = 10),
    ];
});
