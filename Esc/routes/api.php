<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/user/create', function (Request $request) {
    $email = $request->input('email');
    $name = $request->input('name');
    $password = $request->input('password');

    $user = User::create([
        'email' => $email,
        'name' => $name,
        'password' => $password,
        'profile' => 1,
        'status' => 1
    ]);

    return;
});


Route::post('/user/edit', function (Request $request) {
    $email = $request->input('email');
    $name = $request->input('name');
    $password = $request->input('password');
    $profile = $request->input('profile');

    $user = DB::table('users')
    ->where('email',$email)
    ->update(['name' => $name, 'password'=>Hash::make($password), 'profile' => $profile]);

    return;
});