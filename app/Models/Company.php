<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // ... (autres propriétés et méthodes de Company)

    public function jobOffers()
    {
        return $this->hasMany(JobOffer::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
