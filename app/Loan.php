<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
  /**
  *   Mass Assignable Attribute
  **/
  protected $fillable = [
    'loan_amount',
    'loan_type',
  ];
}
