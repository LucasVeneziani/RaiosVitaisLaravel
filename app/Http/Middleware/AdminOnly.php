<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminOnly
{
    public function handle(Request $request, Closure $next): Response
    {
        if (session('auth_role') !== 'admin') {
            return redirect()->route('home')
                ->with('error', 'Acesso restrito a administradores.');
        }
        return $next($request);
    }
}
