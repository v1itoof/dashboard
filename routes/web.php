<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\Dashboard\DashboardController;

// Middlewares
use App\Http\Middleware\ChecarSessaoMiddleware;

Route::get('/', function () {
    return view('autenticacao.login');
});

Route::group(['prefix' => 'autenticacao'], function () {
    Route::post('/login', [AutenticacaoController::class, 'Autenticacao']);
});

// Rotas protegidas
Route::middleware([ChecarSessaoMiddleware::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});
