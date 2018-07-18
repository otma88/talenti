<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inputs extends Model
{
    protected $table = 'inputs';

    public function odgovori() {
      $this->hasMany('App\Odgovori');
    }

    public function users() {
      $this->belongsToMany('App\User');
    }

}
