<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'branch_id',
        'room_id',
        'name',
        'link',
        'created_by',
        'created_at',
        'updated_at',
    ];

    protected $table = 'tb_gallery';
}
