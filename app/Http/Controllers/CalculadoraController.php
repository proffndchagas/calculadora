<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function soma()
    {
        return view ('soma');
    }

    public function calcularSoma(Request $request)
    {
        //O método all da classe Request retorna todos os parâmetros passados pelo formulário
        //dd - O comando dd de forma resumida e simples, seria a mistura do var_dump + die.
        // A ideia dele é logar a variável com um visual melhor, ao contrário do echo que só imprimi um texto.
        // E após logar a variável, parar a execução do código PHP, ou seja, os códigos abaixo do dd não serão executados.


        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 + $valor2;

        return view('resultado', compact('valor1', 'valor2', 'resultado'));

    }
}
