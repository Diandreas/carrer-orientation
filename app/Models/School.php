<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    // ... (autres propriétés et méthodes de School)

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

