<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{   
    
    /**
     *  @author Moncef reggam / Abdelwahed Madani Yousfi 
     * 
     */
    
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
