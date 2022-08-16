<?php

namespace Database\Seeders;

use App\Models\Objectif;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjectifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Objectif::create([
            'nom_Objectif' =>'nom1',
            'description_Objectif' =>'description1',
        ]);
        Objectif::create([
            'nom_Objectif' =>'nom2',
            'description_Objectif' =>'description2',
        ]);
        
    }
}
