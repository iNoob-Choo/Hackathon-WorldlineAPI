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
    'account_no',
    'invoice_date',
    'invoice_no',
    'invoice_summary',
  ];
}
