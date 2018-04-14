<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FixedDeposit extends Model
{
  /**
  *   Mass Assignable Attribute
  **/
  protected $fillable = [
    'id',
    'account_no',
    'balance',
    'tenure_duration',
    'account_type',
    'currency',
    'available_balance',
    'current_balance',
    'maturity_date',
    'interest_rate',
  ];

      /*
      * Relationship Declaration
      *
      *
      */
  public function accounts()
  {
    return $this->belongsTo(Account::class);
  }
}
