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
}
