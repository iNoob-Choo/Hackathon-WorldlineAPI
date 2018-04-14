<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  /**
  *   Mass Assignable Attribute
  **/
  protected $fillable = [
    'account_no',
    'invoice_no',
    'invoice_summary',
  ];
}
