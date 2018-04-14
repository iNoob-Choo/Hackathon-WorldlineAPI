<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixedDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed_deposits', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->string('account_no');
            $table->string('account_type');
            $table->integer('balance');
            $table->integer('tenure_duration');
            $table->char('currency',3);
            $table->float('current_balance');
            $table->float('available_balance');
            $table->date('maturity_date');
            $table->float('interest_rate');
            $table->unsignedInteger('account_id');
            $table->timestamps();

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
        Schema::dropIfExists('fixed_deposits');
    }
}
