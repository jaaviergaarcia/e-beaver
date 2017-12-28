<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'last_name',
        'email', 
        'password',
        'profile_id',
        'phone',
        'birthdate',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //RELACION MUCHOS A UNO
    public function Perfil(){

        return $this->belongsTo('App\Models\Profile');
    }

    //RELACION MUCHOS A MUCHOS

    public function Product(){

        return $this->belongsToMany('App\Models\Product');
    }


    //RELACION UNO A MUCHO
    public function Address(){
        
        return $this->hasMany('App\Models\Address');
    }

    public function billAddress(){

        return $this->hasMany('App\Models\Bill_Address');
    }
}
