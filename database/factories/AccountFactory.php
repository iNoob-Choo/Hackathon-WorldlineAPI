<?php

use Faker\Generator as Faker;

$factory->define(App\Account::class, function (Faker $faker) {
    return [
        //
        'account_type' => $faker->text(5);
        'account_no' => $faker->int(10);
        'currency' => $faker->char(3);
        'min_balance' => $faker->int(4);
        'available_balance' => $faker->int(4);
    //    'profile_id' =>$faker->int(rand(int 1,int 10));
    ];
});
