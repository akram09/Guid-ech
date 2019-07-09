<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class Boutique extends Model
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

    public function Classe(){
        return $this->belongsTo('App\Classe');
    }

}
