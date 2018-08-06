<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorije extends Model
{
  protected $table = 'kategorije';

  public function users(){
    return $this->belongsToMany('App\User');
  }

  public function inputs(){
    return $this->belongsToMany('App\Inputs');
  }

}
