<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //RELACION MUCHOS A UNO

    piblic function Product(){

    	return $this->belongsTo('App\Product');
    }

    public function Color(){

    	return $this->belongsTo('App\Color');
    }

    public function Size(){

    	return $this->belongsTo('App\Size');
    }
}
