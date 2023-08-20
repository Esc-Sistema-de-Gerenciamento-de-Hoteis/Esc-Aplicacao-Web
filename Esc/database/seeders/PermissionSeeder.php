<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1
        Permission::create([
            'name' => 'administration',
            'description' => "This function allows the user to consult the administrations screen",
        ]);

        //2
        Permission::create([
            'name' => "admin_user_create_get",
            'description' => "This function allows the user to consult the user registers screen",
        ]);

        //3
        Permission::create([
            'name' => "admin_user_create_post",
            'description' => "This function allows the user to create another user",
        ]);
    }
}
