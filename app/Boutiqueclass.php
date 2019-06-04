<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boutiqueclass extends Model
{
    public function Boutique() {
        return $this->hasMany('App\Boutique');
    }
}
