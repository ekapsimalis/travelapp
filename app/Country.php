<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function places(){
        return $this->hasMany('App\Place');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
