<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $table = 'trainer';

    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }

    public function workout()
    {
        return $this->hasMany(Workout::class);
    }
}
