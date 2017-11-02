<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	//RELACION MUCHOS A MUCHOS

	public function Color(){

		return $this->belongsToMany('App\Color');
	}

	public function Size(){

		return $this->belongsToMany('App\Size');
	}

	public function User(){

		return $this->belongsToMany('App\User');
	}


    //RELACION MUCHOS A UNO

    public function Category(){

    	return $this->hasMany('App\Category');
    }

    public function Brand(){

    	return $this->hasMany('App\Brand');
    }

    //RELACION UNO A MUCHOS

    public function Feature(){

    	return $this->belongsTo('App\Feature');
    }

    public function Stock(){

    	return $this->belongsTo('App\Stock');
    }
}
