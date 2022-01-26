<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class InicioController extends Controller
{
    public function create(){     
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors(['message' => 'No llenaste los campos o no existen los datos']);
        }
        return redirect()->to('/');
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('login');
    }
    public function usuarios(){
        $datos = User::all();     
        return view('auth.usuarios', compact('datos'));
    }

    public function dash(){  
        $ciudad = HTTP::get('https://api.weatherapi.com/v1/current.json?key=e33caec4f13a45bebba35103222401&q=London'); 
        $ciudadArray = $ciudad->json();  
        return view('home',compact('ciudadArray'));
    }
}
