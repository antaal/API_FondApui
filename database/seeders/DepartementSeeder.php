<?php

namespace Database\Seeders;

use App\Models\Departement;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Departement::create([
            'nom_Departement' => 'Dakar',
            'id_Region' => 1,
        ]);
        Departement::create([
            'nom_Departement' => 'Mariste',
            'id_Region' => 1,
        ]);
    }
}
