<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{   

    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function User(){
        return $this->belongsTo('App\User');
    }
    public function Restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
}
