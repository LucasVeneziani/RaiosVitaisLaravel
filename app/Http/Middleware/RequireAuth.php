<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequireAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('auth_id')) {
            return redirect()->route('admin.login')
                ->with('error', 'Faça login para acessar esta página.');
        }
        return $next($request);
    }
}
