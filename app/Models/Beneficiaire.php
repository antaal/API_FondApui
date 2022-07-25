<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Statut;

class Beneficiaire extends Model
{
    use HasFactory;

    public function statut()
    {
        return $this->belongsTo(Statut::class);
    }
    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }
}
