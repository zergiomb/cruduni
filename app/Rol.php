<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //reverse relationship one to many
     //relationship one to many
     public function rol_users()
     {
         return $this->hasMany('App\rol_user');
     }
}
