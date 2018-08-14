<?php

namespace Nature;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo('Nature\User');
    }
}
