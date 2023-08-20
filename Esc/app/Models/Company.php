<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
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
    ];

    protected $table = 'tb_company';

}
