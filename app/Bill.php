<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  /**
  *   Mass Assignable Attribute
  **/
  protected $fillable = [
    'id',
    'account_no',
    'invoice_no',
    'invoice_summary',
  ];

  public function payments()
  {
    return $this->hasOne(Payment::class);
  }

  public function accounts()
  {
    return $this->belongsTo(Account::class);
  }
}
