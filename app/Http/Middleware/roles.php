<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Roles
{
    /**
     * Handle an incoming request.
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role === "usuario") {
            return to_route('admin.index')
            ->with('status.message', 'El usuario no tiene los permisos necesario para realizar esta acción.')
            ->with('status.error', true);
        }
        return $next($request);
    }
}
