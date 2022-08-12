<?php

namespace Database\Seeders;
use App\Models\Offre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class OffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offre::create([
            'titre' => 'Offre 1',
            'images' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Attributs_de_la_peinture%2C_de_la_sculpture_et_de_l%27architecture_-_Anne_Vallayer-Coster.jpg/1024px-Attributs_de_la_peinture%2C_de_la_sculpture_et_de_l%27architecture_-_Anne_Vallayer-Coster.jpg',
            'description' => 'Lorem ipsum dolor sit amet',
            'date_Lancement' => '2020-07-18',
            'fin_Depot' => '2020-07-18',
            'id_secteur' => 1,
            'id_administrateur' => 2,
        ]);
        Offre::create([
            'titre' => 'Offre 2',
            'images' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Attributs_de_la_peinture%2C_de_la_sculpture_et_de_l%27architecture_-_Anne_Vallayer-Coster.jpg/1024px-Attributs_de_la_peinture%2C_de_la_sculpture_et_de_l%27architecture_-_Anne_Vallayer-Coster.jpg',
            'description' => 'Lorem ipsum dolor sit amet',
            'date_Lancement' => '2020-07-18',
            'fin_Depot' => '2020-07-18',
            'id_secteur' => 1,
            'id_administrateur' => 2,
        ]);
        Offre::create([
            'titre' => 'Offre 3',
            'images' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Attributs_de_la_peinture%2C_de_la_sculpture_et_de_l%27architecture_-_Anne_Vallayer-Coster.jpg/1024px-Attributs_de_la_peinture%2C_de_la_sculpture_et_de_l%27architecture_-_Anne_Vallayer-Coster.jpg',
            'description' => 'Lorem ipsum dolor sit amet',
            'date_Lancement' => '2020-07-18',
            'fin_Depot' => '2020-07-18',
            'id_secteur' => 1,
            'id_administrateur' => 2,
        ]);
        Offre::create([
            'titre' => 'Offre 4',
            'images' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Attributs_de_la_peinture%2C_de_la_sculpture_et_de_l%27architecture_-_Anne_Vallayer-Coster.jpg/1024px-Attributs_de_la_peinture%2C_de_la_sculpture_et_de_l%27architecture_-_Anne_Vallayer-Coster.jpg',
            'description' => 'Lorem ipsum dolor sit amet',
            'date_Lancement' => '2020-07-18',
            'fin_Depot' => '2020-07-18',
            'id_secteur' => 1,
            'id_administrateur' => 2,
        ]);
        Offre::create([
            'titre' => 'Offre 5',
            'images' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Attributs_de_la_peinture%2C_de_la_sculpture_et_de_l%27architecture_-_Anne_Vallayer-Coster.jpg/1024px-Attributs_de_la_peinture%2C_de_la_sculpture_et_de_l%27architecture_-_Anne_Vallayer-Coster.jpg',
            'description' => 'Lorem ipsum dolor sit amet',
            'date_Lancement' => '2020-07-18',
            'fin_Depot' => '2020-07-18',
            'id_secteur' => 1,
            'id_administrateur' => 2,
        ]);
            
    }
}
