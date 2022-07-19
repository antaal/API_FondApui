<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Risque;
use app\Models\Resultat;

class Activite extends Model
{
    use HasFactory;
    protected $fillable = ['nom_Activite', 'description_Activite'];

    public function risque()
    {
        return $this->hasOne(Risque::class);
    }

    public function resultat()
    {
        return $this->hasOne(Resultat::class);
    }
}
