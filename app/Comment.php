<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function word()
    {
        return $this->belongsTo(Word::class);
    }
    public function arabic_word()
    {
        return $this->belongsTo(Arabic_Word::class);
    }
    
}
