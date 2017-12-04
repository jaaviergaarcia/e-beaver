<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //RELACION MUCHOS A UNO
    public function Country()
    {
    	return $this->belongsTo('App\Country');
    }






    //RELACION UNO A MUCHOS
    public function Address(){

    	return $this->hasMany('App\Address');
    }

    public function billAddress() {

    	return $this->hasMany('App\Bill_Address');
    }
}
