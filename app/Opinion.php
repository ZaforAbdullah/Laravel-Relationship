<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function opinionable()
    {
        return $this->morphTo();
    }
}
