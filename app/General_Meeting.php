<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General_Meeting extends Model
{
    public function users()
    {
      
        return $this->belongsToMany(User::class);

    }
    /*
    public function general_meetings_users()
    {
        return $this->hasMany(General_Meeting_User::class);
    }
    */
}
