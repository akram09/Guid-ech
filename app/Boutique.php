<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Boutique extends Model
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

    public function boutiqueclass(){
        return $this->belongsTo('App\boutiqueclass');
    }

}
