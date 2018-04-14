<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payees', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->string('payee_name');
            $table->string('payee_detail');
            $table->string('payee_no');
            $table->string('payee_account_no');
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
        Schema::dropIfExists('payees');
    }
}
