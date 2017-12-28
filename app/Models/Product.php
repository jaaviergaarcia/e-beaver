<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	//RELACION MUCHOS A MUCHOS

	public function Color(){

		return $this->belongsToMany('App\Models\Color');
	}

	public function Size(){

		return $this->belongsToMany('App\Models\Size');
	}

	public function User(){

		return $this->belongsToMany('App\Models\User');
	}


    //RELACION MUCHOS A UNO

    public function Category(){

    	return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function Brand(){

    	return $this->belongsTo('App\Models\Brand', 'brand_id');
    }

    //RELACION UNO A MUCHOS

    public function Feature(){

    	return $this->hasMany('App\Models\Feature', 'feature_id');
    }

    public function Stock(){

    	return $this->hasMany('App\Models\Stock');
    }
}
