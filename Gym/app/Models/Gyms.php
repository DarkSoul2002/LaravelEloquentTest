<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gyms extends Model
{
    use HasFactory;

    public function cities()
    {
        return $this->belongsTo(Cities::class);
    }

    public function trainers()
    {
        return $this->hasMany(Trainers::class);
    }

    public function members()
    {
        return $this->hasMany(Members::class);
    }

    public function workouts()
    {
        return $this->hasMany(Workouts::class);
    }
}
