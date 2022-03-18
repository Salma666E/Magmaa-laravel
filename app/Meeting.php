<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    public function commession()
    {
        return $this->belongsTo(Commission::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function words()
    {
        return $this->hasMany(Word::class);
    }
    public function arabic_words()
    {
        return $this->hasMany(Arabic_Word::class);
    }
    /*
    public function meetings_users()
    {
        return $this->hasMany(Meeting_User::class);
    }
    */
}
