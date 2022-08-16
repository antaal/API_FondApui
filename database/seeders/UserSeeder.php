<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
           'nom' => 'Diop',
              'prenom' => 'Yassine',
                'email' => 'Yassine@gmail.com',
                'password' => bcrypt('123456')
        ]);
        User::create([
            'nom' => 'Diop',
               'prenom' => 'Yass',
                 'email' => 'Yass@gmail.com',
                 'password' => bcrypt('123')
         ]);
        
       
    }
}
