<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[
            \Spatie\Permission\PermissionRegistrar::class
        ]->forgetCachedPermissions();

        //create permissions
        $arrayOfPermissionNames=[
        //offres
        "access offres",
        "create offres",
        "update offres",
        "delete offres",

        //User
        "access offres",
        ];

        $permissions = collect($arrayOfPermissionNames)->map(function (
            $permission
        ){
            return["name"=>$permission, "guard_name"=>"web"];
        });

        Permission::insert($permissions->toArray());


        //create role  and give it permissions
        Role::create(["name"=>"admin"])->givePermissionTo(Permission::all());
        Role::create(["name"=>"responsable"])->givePermissionTo(['access offres']);

        //Assign roles to users 
        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('responsable');
    }
}
