<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //reverse relationship one to many
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
