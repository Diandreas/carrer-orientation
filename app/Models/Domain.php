<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Domain extends Model
{    use HasFactory;
    // ... (autres propriétés et méthodes de Domain)

    public function fields()
    {
        return $this->hasMany(Field::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function jobOffers()
    {
        return $this->hasMany(JobOffer::class);
    }
}
