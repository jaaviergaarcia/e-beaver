<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //REALCION UNO A MUCHOS

    public function Product(){

    	return $this->belongsTo('App\Product');
    }
}