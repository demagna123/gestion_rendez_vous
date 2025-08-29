<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        // L'admin a tous les accès
        if ($user->role === 'admin') {
            return $next($request);
        }

        // Si le rôle de l'utilisateur est dans la liste autorisée
        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        abort(403, 'Accès refusé : vous n\'avez pas les permissions nécessaires.');
    }
}
