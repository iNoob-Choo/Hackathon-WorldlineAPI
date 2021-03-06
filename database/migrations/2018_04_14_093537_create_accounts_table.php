<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->string('account_type');
            $table->string('account_no');
            $table->char('currency');
            $table->float('min_balance');
            $table->float('current_balance');
            $table->float('available_balance');
            $table->unsignedInteger('profile_id');
            $table->timestamps();

            $table->foreign('profile_id')
                    ->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
