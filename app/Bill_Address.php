<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_Address extends Model
{

    //RELACIONES MUCHOS A UNO
    public function State(){

    	return $this->hasMany('App\Bill_Address');
    }
    

    public function User(){

    	return $this->hasMany('App\User');
    }


    //RELACION UNO A MUCHOS
    public function Order(){

    	return $this->belongsTo('App\Order');
    }

}
