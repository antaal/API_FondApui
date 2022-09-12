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
      //   User::create([
      //      'nom' => 'Diooop',
      //         'prenom' => 'Yassine',
      //           'email' => 'Yassine@gmail.com',
      //           'password' => bcrypt('123456')
      //   ]);

      //   User::create([
      //       'nom' => 'Diooop',
      //          'prenom' => 'Anta',
      //            'email' => 'Yase@gmail.com',
      //            'password' => bcrypt('123456')
      //    ]);

         User::create([
            'nom' => 'gueye',
               'prenom' => 'Antaal',
                 'email' => 'yrase@gmail.com',
                 'password' => bcrypt('123456')
         ]);
        
        
       
    }
}
