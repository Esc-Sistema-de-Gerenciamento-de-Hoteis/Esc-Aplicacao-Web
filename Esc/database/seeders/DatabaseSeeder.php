<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;
use \App\Models\Permission;
use \App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //        
        User::create([
            'name' => "MASTER",
            'email' => "admin@admin.com",
            'status' => 1,
            'password' => Hash::make('lang'),
            'profile' => 1,

        ]);

                //1
                Permission::create([
                    'name' => 'administration',
                    'description' => "This function allows the user to consult the administrations screen",
                    'assigned_by' => 1
                ]);
        
                //2
                Permission::create([
                    'name' => "admin_user_create_get",
                    'description' => "This function allows the user to consult the user registers screen",
                    'assigned_by' => 1
                ]);
        
                //3
                Permission::create([
                    'name' => "admin_user_create_post",
                    'description' => "This function allows the user to create another user",
                    'assigned_by' => 1
                ]);

                Profile::create([
                    'name' => "MASTER",
                    'description' => "USER ADMIN",
                    'status' => 1,
                    'created_by' => 1
                ]);
        
                
                Profile::create([
                    'name' => "MANAGER",
                    'description' => "Manager",
                    'status' => 1,
                    'created_by' => 1
                ]);
        
                Profile::create([
                    'name' => "RECEPTIONIST",
                    'description' => "receptionist",
                    'status' => 1,
                    'created_by' => 1
                ]);
    }
}
