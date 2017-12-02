<?php

namespace App;

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

        return $this->belongsTo('App\Profile');
    }

    //RELACION MUCHOS A MUCHOS

    public function Product(){

        return $this->belongsToMany('App\Product');
    }


    //RELACION UNO A MUCHO
    public function Address(){
        
        return $this->hasMany('App\Address');
    }

    public function billAddress(){

        return $this->hasMany('App\Bill_Address');
    }
}
