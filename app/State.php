<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //RELACION MUCHOS A UNO
    public function Country()
    {
    	return $this->hasMany('App\Country');
    }






    //RELACION UNO A MUCHOS
    public function Address(){

    	return $this->belongsTo('App\Address');
    }

    public function billAddress() {

    	return $this->belongsTo('App\Bill_Address');
    }
}
