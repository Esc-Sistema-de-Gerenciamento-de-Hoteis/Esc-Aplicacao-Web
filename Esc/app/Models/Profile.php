<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'description',
        'status',
        'created_by',
    ];

    protected $table = 'tb_profile';
}
