<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AutenticacaoController extends Controller
{
    public function Autenticacao(Request $request){
        // Validação dos dados do formulário de login
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'senha' => 'required',
        ], [
            'email.required' => 'O campo email é obrigatório.',
            'senha.required' => 'O campo senha é obrigatório.',
        ]);

        if ($validator->fails()) {
            $response['success'] = false;
            // Retorna todas as mensagens de erro
            $response['errors'] = $validator->errors()->all();
            return response()->json($response);
        }

        // Obter os dados do formulário
        $email = $request->email;
        $senha = $request->senha;

        $usuario = User::where('email', $email)->first();

        // Lógica de autenticação (substitua pelo que for necessário)
        if ($usuario) {
            $validaSenha = Hash::check($senha, $usuario->password);
            // Senha válida
            if ($validaSenha) {
                $request->session()->put('usuario', $usuario);

                $response['success'] = true;
                $response['message'] = 'Login bem-sucedido';
            }

            // Senha inválida
            if (!$validaSenha) {
                $response['success'] = false;
                $response['message'] = 'Credenciais Inválidas';
            }

        }

        if (!$usuario) {
            $response['success'] = false;
            $response['message'] = 'Email inválido';
        }

        return response()->json($response);
    }
}
