<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/
    
    public function Restaurant(){
        return $this->hasMany('App\Restaurant');
    }

    public function Boutique(){
        return $this->hasMany('App\Boutique');
    }
}
