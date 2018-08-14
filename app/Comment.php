<?php

namespace Nature;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user(){
        return $this->belongsTo('Nature\User');
    }

    public function country(){
        return $this->belongsTo('Nature\Country');
    }
}
