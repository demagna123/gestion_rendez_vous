<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.index')->with('success', 'Bienvenue Admin 👑');
                case 'doctor':
                    return redirect()->route('doctors.index')->with('success', 'Bienvenue Médecin 🩺');
                case 'patient':
                    return redirect()->route('patients.index')->with('success', 'Bienvenue Patient 😊');
                default:
                    return redirect('/')->with('success', 'Bienvenue !');
            }
        }

        return back()->withErrors([
            'email' => 'E-mail ou mot de passe invalide.',
        ])->withInput();
    }
}