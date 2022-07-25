<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\Departement;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['nom_Region'];

    public function departements()
    {
        return $this->hasMany(Departement::class);
    }

   
}
