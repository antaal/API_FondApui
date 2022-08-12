<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $guarded = ['id_projet'];

    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }
    public function plannings()
    {
        return $this->hasMany(Planning::class);
    }
    public function beneficiaires()
    {
        return $this->hasMany(Beneficiaire::class);
    }
    public function objectifs()
    {
        return $this->hasMany(Objectif::class);
    }
    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }
    public function etat()
    {
        return $this->belongsTo(Etat::class);
    }
    public function activites()
    {
        return $this->hasMany('Activite::class');
    }
    public function offre()
    {
        return $this->belongsTo(Offre::class);
    }
    
}
