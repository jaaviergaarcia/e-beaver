<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //RELACION MUCHOS A UNO

    public function billAddress(){

    	return $this->belongsTo('App\Bill_Address');
    }

    public function Address(){

    	return $this->belongsTo('App\Address');
    }

    public function Cupon(){

    	return $this->belongsTo('App\Cupon');
    }
}
