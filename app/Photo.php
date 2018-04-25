<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $table = 'photos';

    protected $uploads = '/mdb/images/';

    protected $fillable = ['path'];

    public function getFileAttribute($photo){
      return $this->uploads . $photo;
    }


}
