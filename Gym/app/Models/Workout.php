<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;
    protected $table = 'workout';

    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'workout_member');
    }
}
