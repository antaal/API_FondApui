<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    protected $fillable = ['nom_responsable', 'prenom_responsable', 'email_responsable', 'password_responsable'];

    public function projets()
    {
        return $this->hasOne(Projet::class);
    }
    public function quartiers()
    {
        return $this->belongsTo(Quartier::class);
    }
    public function entreprises()
    {
        return $this->hasOne(Entreprise::class);
    }
    public function associations()
    {
        return $this->hasOne(Association::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
