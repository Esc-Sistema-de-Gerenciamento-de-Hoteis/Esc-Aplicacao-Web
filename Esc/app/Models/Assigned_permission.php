<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assigned_permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'created_by',
    ];

    protected $table = 'tb_assigned_permission';
}
