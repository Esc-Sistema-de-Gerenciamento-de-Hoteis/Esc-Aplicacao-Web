<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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


    #region Getters and Setters
    public function setLog($user_id, $screen, $description,$observation){
        $this->user_id = $user_id;
        $this->screen = $screen;
        $this->description = $description;
        $this->observation = $observation;

        $this->save();

    }

    public function getLog(){

        $logs = DB::table('tb_logs')
        ->get();

        return $logs;

    }

    #endregion


    protected $table = 'tb_logs';
}
