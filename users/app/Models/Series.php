<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function videos()
    {
        return $this->morphMany(Video::class, 'watchable');
    }
}
