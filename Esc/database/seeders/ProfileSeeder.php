<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
