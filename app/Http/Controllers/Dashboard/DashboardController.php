<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;


class DashboardController extends Controller
{
    public function index(Request $Request){
        // Busca os usuarios no banco
        $users = User::all();

        // Ou, se você quiser paginar os resultados
        // $users = User::paginate(10); // 10 é o número de registros por página
        return view('home', [
            'users' => $users
        ]);
    }
}
