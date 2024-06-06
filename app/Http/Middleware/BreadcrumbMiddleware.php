<?php
namespace App\Http\Middleware;

use Closure;

class BreadcrumbMiddleware
{
    public function handle($request, Closure $next)
    {
        $breadcrumb = $this->generateBreadcrumb($request);
        $request->merge(['breadcrumb' => $breadcrumb]);
        return $next($request);
    }

    private function generateBreadcrumb($request)
    {
        $breadcrumb = [];

        // Lógica para gerar o breadcrumb com base na rota atual
        // Exemplo de lógica:
        if ($request->is('dashboard')) {
            $breadcrumb[] = ['title' => 'Dashboard', 'url' => route('dashboard')];
        } elseif ($request->is('autenticacao/login')) {
            $breadcrumb[] = ['title' => 'Autenticação', 'url' => route('login')];
            $breadcrumb[] = ['title' => 'Login', 'url' => route('login')];
        }

        return $breadcrumb;
    }
}

