<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/
    
    public function Wilaya(){
        return $this->belongsTo('App\Wilaya');
    }

    public function Image(){
        return $this->hasMany('App\Image');
    }

}
