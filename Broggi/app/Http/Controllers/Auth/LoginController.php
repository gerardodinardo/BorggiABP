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
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //esto ensña el formulario del login.-que está enla vista del index.
    public function showLoginForm()
    {
        return view('index');
    }

    
    //esta es la fución que hace la comprobaciíon del login, 
    public function login(Request $request){

       

        $usuari = $request->input('usuari');
        $contrasenya = $request->input('pass');
        $user = Usuario::where('nom',$usuari)->first();
        
        if($user != null && Hash::check($contrasenya, $user->contrasenya)){

            Auth::login($user);
            return redirect('/crearUsuari');

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
