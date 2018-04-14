<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->string('account_no');
            $table->string('invoice_no');
            $table->date('invoice_date');
            $table->string('invoice_summary');
            $table->unsignedInteger('payment_id');
            $table->unsignedInteger('account_id');
            $table->timestamps();

            $table->foreign('payment_id')
                      ->references('id')->on('payments');
            $table->foreign('account_id')
                      ->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
