<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->float('payment_amount');
            $table->date('payment_date');
            $table->string('payment_no');
            $table->string('payment_detail');
            $table->unsignedInteger('transaction_id')->unique();
            $table->unsignedInteger('bill_id')->unique();

            $table->timestamps();
            $table->foreign('transaction_id')
                ->references('id')->on('transactions');

            $table->foreign('bill_id')
                ->references('id')->on('bills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
