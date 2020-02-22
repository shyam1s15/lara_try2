<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Events\TheNewGuyEvent;
use App\Events\saveLoginDetails;
use Illuminate\Http\Request;
// namespace App\Http\Controllers\Auth;

class adminLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    //
    public function login(){
        // app('App\Http\Controllers\Auth\LoginController')->
    }
    public function register(){}

    public function googleCredentialLogin(){
        $user = Socialite::driver('google')->stateless()->user();
        
        foreach($user as $key=>$value){
            print_r( $key);
            echo " : "; 
            print_r($value);
            echo ("<br>");
        }
        \event(new saveLoginDetails($user));
        \event(new TheNewGuyEvent());
        // return \redirect('test2');
    }

    public function facebookCredentialLogin(){
        $user = Socialite::driver('facebook')->user();
        
        foreach($user as $key=>$value){
            print_r( $key);
            echo " : "; 
            print_r($value);
            echo ("<br>");
        }
        return "i am done";
    }

    public function getGoogleCredentialLogin(){
        return Socialite::driver('google')->redirect();
    }
    public function getFacebookCredentialLogin(){
        return Socialite::driver('facebook')->redirect();
    }
    
}
