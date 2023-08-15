<?php

namespace App\Http\Livewire\Administration\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Log;
use App\Models\Validation;

use Livewire\Component;

class Create extends Component
{
    #region GET
    public function render()
    {
        $validation = new Validation(2);

        if($validation->isValidated()){

        $log = new Log;
        $log->setLog(Auth::user()->id,'users registration','Rendering screen','');

        //Search the profiles availables
        $profiles = DB::table('tb_profile')
        ->select('*')
        ->where('status','=',1)
        ->get();

        return view('livewire.administration.user.create', ['profiles' => $profiles ]);


        }else{
            return view('livewire/warning/general',['title'=> 'Permission Denied', 'message' => "User is not allowed to continue. Code (2) please check with the admin!",'route'=>'/administration','icon'=> 'error']);
        }

    }
    #endregion

    #region POST
    public function save()
    {
        $validation = new Validation(3);

        if($validation->isValidated()){
       
        $log = new Log;
        $log->setLog(Auth::user()->id,'users registration','Rendering screen','');

        //Search the profiles availables
        $profiles = DB::table('tb_profile')
        ->select('*')
        ->where('status','=',1)
        ->get();

        return view('livewire.administration.user.create', ['profiles' => $profiles ]);


        }else{
            return view('livewire/warning/general',['title'=> 'Permission Denied', 'message' => "User is not allowed to continue. Code (2) please check with the admin!",'route'=>'/administration','icon'=> 'error']);
        }

    }
    #endregion

}
