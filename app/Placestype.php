<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placestype extends Model
{
    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/
    
    public function Places(){
        return $this->hasMany('App\Place');
    }
}
