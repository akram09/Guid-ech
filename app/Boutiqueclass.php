<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boutiqueclass extends Model
{

    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/
    
    public function Boutiques() {
        return $this->hasMany('App\Boutique');
    }
}
