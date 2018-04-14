<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  /**
  *   Mass Assignable Attribute
  **/
  protected $fillable = [
    'id',
    'payment_amount',
    'payment_date',
    'payment_no',
    'payment_detail',
  ];
}
