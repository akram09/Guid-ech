<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;


class Restaurant extends Model
{
    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/
    
    public function Wilaya(){
        return $this->belongsto('App\Wilaya');
    }
    public function Restauclass(){
        return $this->belongsTo('App\Restauclass');
    }

    public function Resrervation(){
        return $this->HasMany('App\Resrervation');
    }
    public function Slider(){
        return $this->hasMany('App\Slider');
    }
    
    public function User(){
        return $this->belongsTo('App\User');
    }
    
    public function Category(){
        return $this->hasmany('App\Category');
    }
    use Rateable; 

}
