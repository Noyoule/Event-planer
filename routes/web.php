<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthentificationController;

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


Route::get('/auth/redirect', [AuthentificationController::class, 'redirect'])->name('login')->middleware('guest');
Route::get('/auth/callback',[AuthentificationController::class, 'callback'])->middleware('guest')->name('callback');
Route::get('/auth/logout',[AuthentificationController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth')->name('home');
Route::get('/create-form', function(){
   return view('create-form');
})->name('create-form')->middleware('auth');
