<?php

namespace Nature;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    public function user(){
        return $this->belongsTo('Nature\User');
    }
}
