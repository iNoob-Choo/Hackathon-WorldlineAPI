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
        $this->call(AccountTableSeeder::class);
  //      $this->call(BillTableSeeder::class);
    //    $this->call(FixedDepositTableSeeder::class);
  //      $this->call(LoanTableSeeder::class);
  //      $this->call(PayeeTableSeeder::class);
  //      $this->call(PaymentTableSeeder::class);
  //      $this->call(ProfileTableSeeder::class);
  //      $this->call(TransactionTableSeeder::class);
    }
}
