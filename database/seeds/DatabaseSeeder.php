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
        //      $this->call(ProfileTableSeeder::class);
        $this->call([
          ProfileTableSeeder::class,
          AccountTableSeeder::class,
        ]);
          //      $this->call(PaymentTableSeeder::class);
  //      $this->call(BillTableSeeder::class);
    //      $this->call(LoanTableSeeder::class);
    //    $this->call(FixedDepositTableSeeder::class);
  //      $this->call(PayeeTableSeeder::class);
  //      $this->call(TransactionTableSeeder::class);
    }
}
