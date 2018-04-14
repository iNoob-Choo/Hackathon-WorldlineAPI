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
          BillTableSeeder::class,
          TransactionTableSeeder::class,
          PaymentTableSeeder::class,
          LoanTableSeeder::class,
          FixedDepositTableSeeder::class,
          PayeeTableSeeder::class,
          
        ]);
    }
}
