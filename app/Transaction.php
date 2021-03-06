<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  /**
  *   Mass Assignable Attribute
  **/
  protected $fillable = [
    'id',
    'transaction_date',
    'description',
    'debit_amount',
    'credit_amount',
    'account_id'
  ];

      /*
      * Relationship Declaration
      *
      *
      */
  public function payments()
  {
    return $this->belongsTo(Payment::class);
  }

  public function accounts(){
    return $this->belongsTo(Account::class);
  }
}
