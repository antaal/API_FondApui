<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Region;
use app\Models\Commune;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = ['nom_Departement'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    
    public function communes()
    {
        return $this->hasMany(Commune::class);
    }
}
