<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arabic_Word extends Model
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
