<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //RELACION MUCHOS A UNO

    piblic function Product(){

    	return $this->hasMany('App\Product');
    }

    public function Color(){

    	return $this->hasMany('App\Color');
    }

    public function Size(){

    	return $this->hasMany('App\Size');
    }
}
