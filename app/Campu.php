<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campu extends Model
{
    //

    //relationship one to many
    public function faculys()
    {
        return $this->hasMany('App\faculy');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
