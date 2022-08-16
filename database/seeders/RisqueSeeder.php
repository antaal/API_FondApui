<?php

namespace Database\Seeders;

use App\Models\Risque;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RisqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Risque::create([
            'nom_Risque' => 'Risque1',
            'risque_Identifier' =>'risque identier 1',
        ]);
        Risque::create([
            'nom_Risque' => 'Risque2',
            'risque_Identifier' =>'risque identier 2',
        ]);
        Risque::create([
            'nom_Risque' => 'Risque3',
            'risque_Identifier' =>'risque identier 3',
        ]);
    }
}
