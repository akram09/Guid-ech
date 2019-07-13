<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

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
    public function Classe(){
        return $this->belongsTo('App\Classe');
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
        return $this->hasMany('App\Category');
    }

    use Rateable; 

    use Favoriteable;
}
