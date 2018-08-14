<?php

namespace Nature;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function places(){
        return $this->hasMany('Nature\Place');
    }

    public function users(){
        return $this->belongsToMany('Nature\User');
    }

    public function comments(){
        return $this->hasMany('Nature\Comment');
    }
}
