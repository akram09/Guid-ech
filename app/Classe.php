<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function Restaurant(){
        return $this->hasMany('App\Restaurant');
    }

    public function Boutique(){
        return $this->hasMany('App\Boutique');
    }
}
