<?php

namespace Database\Seeders;

use App\Models\Commune;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Commune::create([
            'nom_Commune' => 'Sacre Coeur',
            'id_Departement' => 1,
        ]);
        Commune::create([
            'nom_Commune' => 'Hann Mariste',
            'id_Departement' => 1,
        ]);
    }
}
