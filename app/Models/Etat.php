<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function projets()
    {
        return $this->hasOne(Projet::class);
    }

   public function statut_projets()
    {
        return $this->hasMany(Statut_Projet::class);
    }
    
}
