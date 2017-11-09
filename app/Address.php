<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	
    //RELACION MUCHOS A UNO
    public function State(){

    	return $this->hasMany('App\State');
    }

    public function User(){

    	return $this->hasMany('App\User');
    }



    //RELACION UNO A MUCHOS
    public function Orden(){

    	return $this->belongsTo('App\Order');
    }

}
