<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;


class DashboardController extends Controller
{
    public function index(Request $Request){
        // Definindo o título da página

        // Definindo o breadcrumb
        $breadcrumb = [
            ['title' => 'Home', 'url' => "/admin/dashboard"]
        ];

        // Busca os usuarios no banco
        $users = User::all();

        return view('home', [
            'users' => $users,
            'breadcrumb' => $breadcrumb
        ]);
    }
}
