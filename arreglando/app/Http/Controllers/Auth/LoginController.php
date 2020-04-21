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

       

        $usuari_ = $request->input('usuari');
        $contrasenya = $request->input('pass');
        $user = Usuario::where('nom',$usuari_)->first();

        //$e = Hash::check($contrasenya, $user->contrasenya);


        if($user != null && Hash::check($contrasenya, $user->contrasenya)){

            //guarda el id del rol del usuari. Version Alessio

            Auth::login($user);
            
            if($user->rols_id==1)
            {            
                return redirect('/crearUsuari');
            }
            else if($user->rols_id==2)
            {   
                return redirect('/principalIncidencies');
            }
            else
            {              
                return redirect('/gestioRecursos');
            }

        }else
        {
        //    return redirect('/');
            return redirect('login')->withInput();

        }
    }

    //funcio per a tancar la sessio.
    public function logout(){

        Auth::logout();

        return redirect('/login');
        
    }
}
