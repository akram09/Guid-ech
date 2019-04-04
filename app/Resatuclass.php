<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resatuclass extends Model
{
    public function Restaurant(){
        return $this->HasMany('App/Restaurant');
    }
}
