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

    public function images(){
        return $this->morphMany('App\Image' , 'imageable');
    }

}
