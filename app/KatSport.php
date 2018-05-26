<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KatSport extends Model
{
  protected $table = 'kat_sport';

  protected $fillable = [
    'iskustvo'
  ];

  public function inputs() {
    return $this->belongsTo('App\Inputs');
  }

}
