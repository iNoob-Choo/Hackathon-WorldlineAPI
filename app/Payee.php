<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payee extends Model
{
  /**
  *   Mass Assignable Attribute
  **/
  protected $fillable = [
    'id',
    'payee_name',
    'payee_no',
    'payee_detail',
    'payee_account_no',
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
