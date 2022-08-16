<?php

namespace Database\Seeders;

use App\Models\Quartier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuartierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Quartier::create([
            'nom_Quartier' => 'Mermoz',
            'id_Commune' => 1,
        ]);
        Quartier::create([
            'nom_Quartier' => 'Sacre Coeur',
            'id_Commune' => 1,
        ]);
        Quartier::create([
            'nom_Quartier' => 'Hann Bel Air',
            'id_Commune' => 2,
        ]);
        
    }
}
