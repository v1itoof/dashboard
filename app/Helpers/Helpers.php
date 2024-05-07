<?php
namespace App\Helpers;

class Helpers {
    public static function NomeSobrenome(string $nome) {
        if(!empty($nome)){
            $partesNome = explode(' ', $nome);
            $primeiroNome = $partesNome[0];
            $ultimoNome = end($partesNome);

            // Concatenar os dois nomes em uma string
            return "$primeiroNome $ultimoNome";
        }

        // Retornar uma string vazia caso $nome esteja vazio
        return '';
    }
}
