<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //REALCION UNO A MUCHOS

    public function Product(){

    	return $this->belongsToMany('App\Product');
    }

    //RELACION UNO A MUCHOS

    public function Stock(){

    	return $this->belongsTo('App\Stock');
    }
}
