<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workouts extends Model
{
    use HasFactory;

    public function gyms()
    {
        return $this->belongsTo(Gyms::class);
    }

    public function trainers()
    {
        return $this->belongsTo(Trainers::class);
    }

    public function members()
    {
        return $this->belongsToMany(Members::class, 'workout_members');
    }
}
