<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    //RELACIONES UNO A MUCHOS

    public function Order(){

    	return $this->hasMany('App\Models\Order');
    }
}
