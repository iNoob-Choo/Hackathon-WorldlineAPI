<?php

use Illuminate\Database\Seeder;

class FixedDepositTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FixedDeposit::class, 10)->create();
    }
}
