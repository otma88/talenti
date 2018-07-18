<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pitanja extends Model
{
  protected $table = 'pitanja';

  public function odgovori() {
    return $this->hasMany('App\Odgovori');

  }

}
