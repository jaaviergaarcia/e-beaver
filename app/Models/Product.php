<?php

namespace App\Models;

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

    	return $this->belongsTo('App\Category', 'category_id');
    }

    public function Brand(){

    	return $this->belongsTo('App\Brand', 'brand_id');
    }

    //RELACION UNO A MUCHOS

    public function Feature(){

    	return $this->hasMany('App\Feature', 'feature_id');
    }

    public function Stock(){

    	return $this->hasMany('App\Stock');
    }
}
