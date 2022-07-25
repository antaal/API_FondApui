<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Projet;

class Objectif extends Model
{
    use HasFactory;
   
    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }
}
