<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
  /**
  *   Mass Assignable Attribute
  **/
  protected $fillable = [
    'id',
    'loan_amount',
    'loan_type',
  ];

  public function accounts()
  {
    return $this->belongsTo(Account::class);
  }
}
