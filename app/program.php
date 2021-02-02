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
  //reverse relationship many to many
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    
}
