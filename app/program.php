<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    //reverse relationship one to many
    public function faculy()
    {
        return $this->belongsTo('App\faculy');
    }

    public function program_users()
    {
        return $this->hasMany('App\program_user');
    }
}
