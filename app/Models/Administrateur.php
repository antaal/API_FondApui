<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function projets()
    {
        return $this->hasMany(Projet::class);
    }
    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
}
