<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgGallery extends Model
{
  protected $table = 'img_gallery';

  protected $uploads = '/mdb/images/gallery/';

  protected $fillable = ['path'];

  public function getPathAttribute($img_gallery){
    return $this->uploads . $img_gallery;
  }
}
