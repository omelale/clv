<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function comment(){
        return $this->hasMany('App\Comment');
    }
    
    
}
