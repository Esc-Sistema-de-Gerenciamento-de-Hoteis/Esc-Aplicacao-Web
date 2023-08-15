<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
