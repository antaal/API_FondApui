<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            "name"=>"Admin",
            "guard_name"=>"web"
        ]);
        Role::create([
            "name"=>"Responsable",
            "guard_name"=>"web"
        ]);

        $user = DB::table('users')->find(1);
        $role = DB::table('roles')->find(1);

        $user->assignRole($role);
    }
}
