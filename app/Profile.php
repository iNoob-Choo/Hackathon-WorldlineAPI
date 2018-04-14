<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  /**
  *   Mass Assignable Attribute
  **/
  protected $fillable = [
    'id',
    'gender',
    'first_name',
    'last_name',
    'age',
    'address',
    'country',
    'email',
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
