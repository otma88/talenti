<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use Sluggable;
    use SluggableScopeHelpers;


  public function sluggable()
  {
        return [
            'slug' => [
                'source' => 'fullname',
            ]
        ];
  }

  public function getFullnameAttribute() {
        return $this->name . ' ' . $this->surname;
  }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
      return $this->belongsTo('App\Role');
    }

    public function grad(){
      return $this->belongsTo('App\Grad');
    }

    public function drzava(){
      return $this->belongsTo('App\Drzava');
    }

    public function zupanija(){
      return $this->belongsTo('App\Zupanija');
    }

    public function kategorije(){
      return $this->belongsToMany('App\Kategorije');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
