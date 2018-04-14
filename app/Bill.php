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
    'gender',
    'first_name',
    'last_name',
    'age',
    'address',
    'country',    
  ];
}
