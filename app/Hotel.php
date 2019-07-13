<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class Hotel extends Model
{
    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/
    use Rateable;

    use Favoriteable;

    public function Wilaya(){
        return $this->belongsto('App\Wilaya');
    }

    
}


