<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
   
   protected $with = ['responsable', 'offre'];
    public function responsable()
    {
        return $this->belongsTo(Responsable::class, 'responsables_id','id');
    }
   
    public function offre()
    {
        return $this->belongsTo(Offre::class, 'offres_id','id');
    }
    
}
