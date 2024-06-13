<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    // ... (autres propriétés et méthodes de Training)

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
