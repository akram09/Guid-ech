<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    public function Hotel(){
        return $this->HasMany('App/Hotel');
    }

    public function Restaurant(){
        return $this->HasMany('App/Restaurant');
    }

    public function Place(){
        return $this->HasMany('App/Place');
    }
    
    public function Boutique(){
        return $this->HasMany('App/Boutique');
    }
}
