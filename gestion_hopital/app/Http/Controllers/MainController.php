<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function login() {
        return view('auth.login');
    }
    public function base1(){
        return view('layout.base1');
    }
    public function base2(){
        $patients = Patient::all(); // ou une requête plus spécifique
        return view('layout.base2', compact('patients'));

    }
    public function base3(){
        return view('layout.base3');
    }
}
