<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    public function Wilaya(){
        return $this->belongsto('App\Wilaya');
    }

    public function boutiqueclass(){
        return $this->belongsTo('App\boutiqueclass');
    }
    public function Slider(){
        return $this->hasMany('App\Slider');
    }
}
