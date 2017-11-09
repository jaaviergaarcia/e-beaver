<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //RELACION UNO A MUCHOS

    public function User(){

    	return $this->belongsTo('App\User');
    }
}
