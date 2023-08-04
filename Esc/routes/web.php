<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

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
    
    $user = User::updateOrCreate([
        'id' => $GoogleUser->id,
    ], [
        'name' => $GoogleUser->name,
        'email' => $GoogleUser->email,
        'sub' => $GoogleUser->user['sub'],
        'profile_photo_path' => $GoogleUser->user['picture'],
    ]);
 
    Auth::login($user);
 
    return redirect('/dashboard');
});