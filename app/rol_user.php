<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol_user extends Model
{
   
    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
