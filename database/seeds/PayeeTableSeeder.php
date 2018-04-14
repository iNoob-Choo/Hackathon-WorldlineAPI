<?php

use Illuminate\Database\Seeder;

class PayeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Payee::class, 10)->create();
    }
}
