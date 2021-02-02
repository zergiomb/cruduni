<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //reverse relationship one to many
     //relationship one to many
     public function users()
     {
         
             return $this->hasMany('App\User');
         
     }
  
}
