<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          ProfileTableSeeder::class,
          AccountTableSeeder::class,
          PaymentTableSeeder::class,
          BillTableSeeder::class,
          LoanTableSeeder::class,
          FixedDepositTableSeeder::class,
          PayeeTableSeeder::class,
          TransactionTableSeeder::class,
        ]);
    }
}
