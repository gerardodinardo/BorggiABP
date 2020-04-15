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
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

  
    public function index(){

        return view('crearUsuari');
        
    }

    public function register(Request $request)
    {
        
                    //lo que está seguido del -> es el nombre de la columna de la BD
                    $usuari = new Usuario();
                    $pass = $request->input('contrasenya');
                    $pass = Hash::make($pass);
                    $usuari->nom = $request->input('inputUsuari');
                    $usuari->codi = $request->input('inputCodi');
                    $usuari->rols_id = $request->input('rol');
                    $usuari->contrasenya = $pass;
                   
                    $usuari->save();
            
                    return redirect()->to('/index');

    }



}
