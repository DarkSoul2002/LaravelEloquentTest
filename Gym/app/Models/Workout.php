<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    public function gyms()
    {
        return $this->hasOne(Gyms::class);
    }

    public function trainers()
    {
        return $this->hasOne(Trainers::class);
    }

    public function members()
    {
        return $this->hasMany(Members::class);
    }
}
