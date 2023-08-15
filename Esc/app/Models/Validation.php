<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Warning\General;
use Illuminate\Auth\Events\Validated;

class Validation extends Model
{
    use HasFactory;

    private $permission_code;
    private $rote;
    public $validated = false;

    public  function __construct($permission_code)
    {
        $log = new Log();
        if(Auth::user()->profile == 1){
            $this->validated = true;
            return $this->validated;
        }else{
            $user_permission = DB::table('tb_assigned_permission')
            ->where('profile_id', '=',Auth::user()->id)
            ->where('permission_id','=',$permission_code)
            ->first();

            $permissionId = (string)$permission_code;

            try{
                if($user_permission->id >= 1){
                    $this->validated = true;
                    
                }else{
                    
                    $log->setLog(Auth::user()->id,'Administration','Permission Denied',"User is not allowed to continue. (" + $permissionId + ")");
                    $this->validated = false;
                }
                
                //return $permision;

            }catch(\Exception $e){
                $log->setLog(Auth::user()->id,'Administration','Permission Denied',"User is not allowed to continue. Code: ($permissionId)");
                $this->validated = false;
        }

        }

    }

    public function isValidated(){
        return $this->validated;
    }
}
