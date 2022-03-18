<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }
    public function commissionuser()
    {
        return $this->belongsToMany(User::class)->withPivot('job','transactions');
    }
    /*
    public function commissionUsers()
    {
        return $this->hasMany(Commission_User::class);
    }
    */
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
