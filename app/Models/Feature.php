<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //

    public function Product(){

    	return $this->belongsTo('App\Product');
    }
}
