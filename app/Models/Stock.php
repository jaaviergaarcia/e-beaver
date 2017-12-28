<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //RELACION MUCHOS A UNO

    public function Product(){

    	return $this->belongsTo('App\Models\Product');
    }

    public function Color(){

    	return $this->belongsTo('App\Models\Color');
    }

    public function Size(){

    	return $this->belongsTo('App\Models\Size');
    }
}
