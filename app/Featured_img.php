<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featured_img extends Model
{
    function post(){
        return $this->belongsTo('App\Post');
    }
}
