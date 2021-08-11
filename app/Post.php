<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content','user_id'];

    function featured_img(){
        return $this->hasOne('App\Featured_img');
    }

    function user(){
        return $this->belongsTo('App\User');
    }
}
