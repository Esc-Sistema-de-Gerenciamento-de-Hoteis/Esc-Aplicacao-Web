<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'screen',
        'description',
        'observation',
    ];

    public function __construct($user_id, $screen, $description,$observation)
    {
        $this->user_id = $user_id;
        $this->screen = $screen;
        $this->description = $description;
        $this->observation = $observation;

        $this->save();
    }

    protected $table = 'tb_logs';
}
