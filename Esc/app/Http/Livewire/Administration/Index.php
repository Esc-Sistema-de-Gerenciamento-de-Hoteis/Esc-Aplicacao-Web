<?php

namespace App\Http\Livewire\Administration;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;
use App\Models\Validation;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        
        $validation = new Validation(1);

        //dd($validation);
        if($validation->isValidated()){
        //Registering log 
        $log = new Log;
        $log->setLog(Auth::user()->id,'Administration','Rendering screen','');

        return view('livewire.administration.index');


        }else{
            return view('livewire/warning/general',['title'=> 'Permission Denied', 'message' => "User is not allowed to continue. Code (1) please check with the admin!",'route'=>'/dashboard','icon'=> 'error']);
        }

    }
}
