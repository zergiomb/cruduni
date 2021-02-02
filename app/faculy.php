<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculy extends Model
{
    //

    //reverse relationship one to many
    public function campu()
    {
        return $this->belongsTo('App\Campu');
    }
   

     //relationship one to many

    public function programs()
    {
        return $this->hasMany('App\program');
    }
}
