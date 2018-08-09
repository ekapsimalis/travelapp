<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function feedbacks(){
        return $this->hasMany('App\Feedback');
    }

    public function isAdmin(){
        return $this->type === self::ADMIN_TYPE;
    }

    public function countries(){
        return $this->belongsToMany('App\Country');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
