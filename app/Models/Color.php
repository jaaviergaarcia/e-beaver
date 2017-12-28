<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //REALCION UNO A MUCHOS

    public function Product(){

    	return $this->belongsToMany('App\Models\Product');
    }

    //RELACION UNO A MUCHOS

    public function Stock(){

    	return $this->hasMany('App\Models\Stock');
    }
}
