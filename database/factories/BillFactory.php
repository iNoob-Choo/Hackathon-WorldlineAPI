<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'account_no' => $faker->int(10);
      'invoice_date' => $faker->text(5);
      'invoice_no' => $faker->int(10);
      'invoice_summary' => $faker->int(4);
    ];
});
