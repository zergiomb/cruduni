<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program_user extends Model
{
    //reverse one to many

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function program()
    {
        return $this->belongsTo('App\program');
    }
}
