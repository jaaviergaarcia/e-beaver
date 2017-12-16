<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['name','code'];


    public function State(){
    	return $this->hasMany('App\State');
    }

    
}
