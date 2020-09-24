<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    use HasFactory;

    public function gyms()
    {
        return $this->belongsTo(Gyms::class);
    }

    public function workouts()
    {
        return $this->hasMany(Workouts::class);
    }
}
