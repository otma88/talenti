<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drzava extends Model
{
  protected $table = 'drzava';

  protected $fillable = [
    'name'
  ];
}
