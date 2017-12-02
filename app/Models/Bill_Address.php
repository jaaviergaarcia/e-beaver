<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_Address extends Model
{

    //RELACIONES MUCHOS A UNO
    public function State(){

    	return $this->belongsTo('App\State');
    }
    

    public function User(){

    	return $this->belongsTo('App\User');
    }


    //RELACION UNO A MUCHOS
    public function Order(){

    	return $this->hasMany('App\Order');
    }

}
