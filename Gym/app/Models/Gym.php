<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function trainers()
    {
        return $this->hasMany(Trainer::class);
    }

    public function members()
    {
        return $this->hasMany(User::class);
    }

    public function workout()
    {
        return $this->hasMany(Workout::class);
    }
}
