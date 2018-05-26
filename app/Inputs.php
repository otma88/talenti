<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inputs extends Model
{
    protected $table = 'inputs';

    protected $fillable = [
      'name'
    ];

}
