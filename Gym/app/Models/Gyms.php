<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gyms extends Model
{
    use HasFactory;

    public function city()
    {
        return $this->hasOne(City::class);
    }

    public function trainers()
    {
        return $this->hasMany(Trainers::class);
    }

    public function members()
    {
        return $this->hasMany(Members::class);
    }

    public function workout()
    {
        return $this->hasMany(Workout::class);
    }
}
