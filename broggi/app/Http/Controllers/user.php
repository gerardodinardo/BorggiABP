<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class user extends Controller
{
    

 public function checkUser(Request $request)
 {

    if($request->session()->has->('admin')){
        return view('crearUsuari')
    }

 }

}
