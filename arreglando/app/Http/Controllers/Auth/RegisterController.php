<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
//use App\User;
use App\Usuario;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){

        return view('crearUsuari');
        
    }

    public function register(Request $request)
    {
        
                    //lo que está seguido del -> es el nombre de la columna de la BD
                    $usuari = new Usuario();
                    $pass = $request->input('inputContrasenya');
                    $pass = Hash::make($pass);
                    $usuari->nom = $request->input('inputUsuari');
                    $usuari->codi = $request->input('inputCodi');
                    $usuari->rols_id = $request->input('rol');
                    $usuari->contrasenya = $pass;
                   
                    $usuari->save();
            
                    return redirect()->to('/crearUsuari');

    }
}
