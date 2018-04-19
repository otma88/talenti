<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zupanija extends Model
{
  protected $table = 'zupanija';

  protected $fillable = [
    'name'
  ];
}
