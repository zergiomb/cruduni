<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','surname','code','email','password','nationality','city','direction','phone', 'rol_id','campu_id','faculie_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }
    public function campu()
    {
        return $this->belongsTo('App\Campu');
    }

    public function faculy()
    {
        return $this->belongsTo('App\faculy');
    }
}
