<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Activite;

class Risque extends Model
{
    use HasFactory;

    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }
    public function strategy()
    {
        return $this->hasOne(Strategy::class);
    }
}