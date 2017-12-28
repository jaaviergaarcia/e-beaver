<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //RELACION MUCHOS A UNO

    public function billAddress(){

    	return $this->belongsTo('App\Models\Bill_Address');
    }

    public function Address(){

    	return $this->belongsTo('App\Models\Address');
    }

    public function Cupon(){

    	return $this->belongsTo('App\Models\Cupon');
    }
}
