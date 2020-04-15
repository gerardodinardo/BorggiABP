<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Usuario;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('index');
    }

    
    //esta es la fución que hace la comprobaciíon del login, 
    public function login(Request $request){

       

        $usuari = $request->input('usuari');
        $contrasenya = $request->input('contrasenya');
        $user = Usuario::where('nom',$usuari)->first();
        
        if($user != null && Hash::check($contrasenya, $user->contrasenya)){

            Auth::login($user);
            return redirect('/register');

        }else{

            return redirect('login')->withInput();

        }
    }

    //funcio per a tancar la sessio.
    public function logout(){

        Auth::logout();

        return redirect('/login');
        
    }
}
