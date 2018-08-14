<?php

namespace Nature;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function country(){
        return $this->belongsTo('Nature\Country');
    }
}
