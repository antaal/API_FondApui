<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $guarded = ['id_offre'];

    public function secteur()
    {
        return $this->belongsTo(Secteur::class);
    }
    public function projets()
    {
        return $this->hasMany(Projet::class);
    }
    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class);
    }
}
