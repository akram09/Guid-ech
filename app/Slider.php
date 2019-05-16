<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
   
    
    public function Place(){
        return $this->belongsto('App/Place');
    }

    public function Boutique(){
        return $this->belongsto('App/Boutique');
    }

    public function Restaurant(){
        return $this->belongsto('App/Restaurant');
    }

    public function Wilaya(){
        return $this->belongsto('App/Wilaya');
    }
}