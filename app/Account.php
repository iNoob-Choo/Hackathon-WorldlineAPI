<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
    *   Mass Assignable Attribute
    **/
    protected $fillable = [
      'id',
      'account_type',
      'account_no',
      'currency',
      'min_balance',
      'current_balance',
      'available_balance',
    ];


    /*
    * Relationship Declaration
    *
    *
    */

    public function profiles()
    {
      return $this->hasOne(Profile::class);
    }

    public function fixeddeposits()
    {
      return $this->hasOne(FixedDeposit::class);
    }

    public function loans()
    {
      return $this->hasMany(Loan::class);
    }

    public function payees()
    {
      return $this->hasMany(Payee::class);
    }

    public function bills()
    {
      return $this->hasMany(Bill::class);
    }

    public function transactions(){
      return $this->hasMany(Transaction::class);
    }
}
