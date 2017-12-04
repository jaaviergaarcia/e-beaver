<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //REALCION UNO A MUCHOS

    public function Product(){

    	return $this->hasMany('App\Product');
    }
}
