<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  /**
  *   Mass Assignable Attribute
  **/
  protected $fillable = [
    'transaction_date',
    'description',
    'debit_amount',
    'credit_amount',
  ];
}
