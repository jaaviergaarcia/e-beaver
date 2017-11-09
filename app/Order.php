<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //RELACION MUCHOS A UNO

    public function billAddress(){

    	return $this->hasMany('App\Bill_Address');
    }

    public function Address(){

    	return $this->hasMany('App\Address');
    }

    public function Cupon(){

    	return $this->hasMany('App\Cupon');
    }
}
