<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
   /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/

    public function Restaurant(){
        return $this->belongsto('App\Restaurant');
    }
    
    public function User(){
        return $this->belongsTo('App\User');
    }
 
}