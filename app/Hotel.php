<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Hotel extends Model
{
    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/
    use Rateable;

    public function Wilaya(){
        return $this->belongsto('App\Wilaya');
    }

    
}


