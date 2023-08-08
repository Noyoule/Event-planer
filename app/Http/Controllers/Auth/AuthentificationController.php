<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthentificationController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public  function callback () {
       $google_user = Socialite::driver('google')->stateless()->user();

        $user =  User::updateOrCreate(
            ['provider_id' => $google_user->id],
            [
                'provider_id' => $google_user->id,
                'name' => $google_user->name,
                'email' => $google_user->email,
                'avatar' => $google_user->avatar,
                'avatar_original' => $google_user->avatar_original,
                'token' => $google_user->token
            ]
        ); 
       Auth::login($user);
        return redirect()->intended('/dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('/');
    }
}
