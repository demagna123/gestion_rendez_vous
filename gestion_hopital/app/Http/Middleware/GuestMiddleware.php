<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.index');
                case 'doctor':
                    return redirect()->route('doctors.index');
                case 'patient':
                    return redirect()->route('patients.index');
                default:
                    return redirect('/'); // ou une page d’accueil générique
            }
        }

        return $next($request);
    }
}