<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    // ... (autres propriétés et méthodes de JobOffer)

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
