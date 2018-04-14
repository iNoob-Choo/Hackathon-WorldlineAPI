<?php

use Faker\Generator as Faker;
use App\Bill;
use App\Transaction;

$factory->define(App\Payment::class, function (Faker $faker) {
    return [
        'payment_amount'=>$faker->numberBetween($min = 1, $max = 9999),
        'payment_date'=>$faker->dateTimeBetween($startDate = "now", $endDate = "30 days"),
        'payment_no'=>$faker->numberBetween($min = 1, $max = 30),
        'payment_detail'=>$faker->numberBetween($min = 1, $max = 30),
        'bill_id' =>$faker->unique()->randomElement(Bill::pluck('id')->toArray()),
        'transaction_id'=>$faker->unique()->randomElement(Transaction::pluck('id')->toArray()),
    ];
});
