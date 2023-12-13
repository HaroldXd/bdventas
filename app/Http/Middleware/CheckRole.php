<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/'); // O redirige a la página de inicio de sesión
        }
    
        $user = Auth::user();
    
        // Verificar si el usuario tiene el rol correcto
        if (in_array($user->role, $roles)) {
            return $next($request);
        }
    
        // Si el usuario no tiene el rol correcto, redirige a una página no autorizada
        return redirect('/')->withErrors(['message' => 'Acceso no autorizado']);
    }
}
