<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    // ... (autres propriétés et méthodes de Field)

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
