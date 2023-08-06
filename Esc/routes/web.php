<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Log;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/***************************************************************************************/
/*                                                                                     */
/*                                                                                     */
/*                               Auth with Google                                      */
/*                                                                                     */
/*                                                                                     */
/***************************************************************************************/

Route::get('/google_auth', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/callback', function () {
    $GoogleUser = Socialite::driver('google')->user(); 

    $selectUser = DB::table('users')->where('email', $GoogleUser->email)->get();

    foreach ($selectUser as $selectUser) {
        $status = $selectUser->status; // Access status property for each product
    }


    if( $user = User::where('email', $GoogleUser->email)->exists()){

        if($status == 0){
            $log = new Log($user->id,'Login','User blocked',"The user couldn't logged because is blocked");
            return view('livewire/warning/userblocked',['message' => 'User blocked, please check with the admin!','route'=>'/login']);

        }else{
            
            Auth::login($GoogleUser);

            $log = new Log($user_selected->id,'Login','Logged in',"The user logged into the system by SSO");
            return redirect('/dashboard');

        }

    }else{

        //creating user ...
        $user = User::updateOrCreate([
            'name' => $GoogleUser->name,
            'email' => $GoogleUser->email,
            'sub' => $GoogleUser->user['sub']
        ]);

        //Authentication
        Auth::login($user);

        $log = new Log($user_selected->id,'Login','Logged in',"The user logged into the system by SSO");
        return redirect('/dashboard');
    } 

    
});