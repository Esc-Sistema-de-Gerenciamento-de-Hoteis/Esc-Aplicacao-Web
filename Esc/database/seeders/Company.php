<?php

namespace Database\Seeders;

use App\Models\Company as ModelCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Company extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ModelCompany::create([
            'branch' => 'Hotel Villa nova',
            'description' => 'Esse hotel é bom',
            'comfort' => 'Wifi gratis',
            'rated' => '5',
            'street' => 'Av. Sete de Setembro, 784',
            'neighborhood' => 'Batel',
            'city' => 'Curitiba',
            'state' => 'Parana',
            'cep' => '88320-405',
            'email' => 'hotelvillanovapr@icloud.com',
            'contact' => '4130602895',
            'status' => 1,
        ]);

        ModelCompany::create([
            'branch' => 'Hotel Villa nova',
            'description' => 'Esse hotel é bom',
            'comfort' => 'Wifi gratis',
            'rated' => '5',
            'street' => 'Largo do Arouche, 200',
            'neighborhood' => 'Batel',
            'city' => 'Republica',
            'state' => 'Sao Paulo',
            'cep' => '01036-100',
            'email' => 'hotelvillanovasp@icloud.com',
            'contact' => '1132241420',
            'status' => 1,
        ]);
    }
}


/*
        'id',
        'branch',
        'description',
        'comfort',
        'rated',
        'street',
        'neighborhood',
        'city',
        'state',
        'cep',
        'email',
        'contact',
        'status',
        'created_at',
        'updated_at',
*/