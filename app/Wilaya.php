<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    public function Hotel(){
        return $this->HasMany('App\Hotel');
    }

    public function Restaurant(){
        return $this->HasMany('App\Restaurant');
    }

    public function Place(){
        return $this->HasMany('App\Place');
    }
    
    public function Boutique(){
        return $this->HasMany('App\Boutique');
    }
    public function Slider(){
        return $this->hasMany('App\Slider');
    }
    public function GuidFood(){
        return $this->hasMany('App\GuidFood');
    }

    public function GuidTaxi(){
        return $this->hasAmny('App\GuidTaxi');
    }
}
