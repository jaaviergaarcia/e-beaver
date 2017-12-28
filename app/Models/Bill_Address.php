<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill_Address extends Model
{

    //RELACIONES MUCHOS A UNO
    public function State(){

    	return $this->belongsTo('App\Models\State');
    }
    

    public function User(){

    	return $this->belongsTo('App\Models\User');
    }


    //RELACION UNO A MUCHOS
    public function Order(){

    	return $this->hasMany('App\Models\Order');
    }

}
