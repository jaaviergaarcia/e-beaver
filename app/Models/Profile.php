<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //RELACION UNO A MUCHOS

    public function User(){

    	return $this->hasMany('App\User');
    }
}
