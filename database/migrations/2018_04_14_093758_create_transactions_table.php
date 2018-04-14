<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->date('transaction_date');
            $table->string('description');
            $table->float('debit_amount');
            $table->float('credit_amount');
            $table->unsignedInteger('payment_id');
            $table->timestamps();

            $table->foreign('payment_id')
                      ->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
