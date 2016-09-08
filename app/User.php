<?php

namespace App;

use App\Article;
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
        'name', 'email', 'password','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //No lo muestra en consultas por usuarios
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function articles(){
        return $this->hasMany('App\article');
    }





}
