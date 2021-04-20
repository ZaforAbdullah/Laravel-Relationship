<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function opinions()
    {
        return $this->morphMany(Opinion::class, 'opinionable');
    }
}
