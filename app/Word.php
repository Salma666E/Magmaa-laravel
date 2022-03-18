<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function meeting()
    {
        return $this->belongsTo(Meeting::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
