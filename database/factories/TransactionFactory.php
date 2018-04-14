<?php

use Faker\Generator as Faker;
use App\Account;

$factory->define(App\Transaction::class, function (Faker $faker) {
    return [
        'transaction_date'=> $faker->dateTimeBetween($startDate = "now", $endDate = "30 days"),
        'description'=>$faker->numberBetween($min = 1, $max = 30),
        'debit_amount'=>$faker->numberBetween($min = 1000, $max = 9999),
        'credit_amount'=>$faker->numberBetween($min = 1000, $max = 3000),
        'account_id' => $faker->randomElement(Account::pluck('id')->toArray())
        //'payment_id'=>$faker->numberBetween($min = 1, $max = 10),
    ];
});
