<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChecarSessaoMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('usuario')) {
            // Redireciona para a página de login
            return redirect('/');
        }

        return $next($request);
    }
}
