<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
        public function index()
        {
            return view('index');
        }
    
        public function processarFormulario(Request $request)
        {
            $nome = $request->input('nome');
            $sobrenome = $request->input('sobrenome');
    
            $urlIdade = 'https://api.agify.io?name=' . $nome;
            $respostaIdade = file_get_contents($urlIdade);
            $dadosIdade = json_decode($respostaIdade, true);

            $urlNacionalidade = 'https://api.nationalize.io/?name=' . $sobrenome;
            $respostaNacionalidade = file_get_contents($urlNacionalidade);
            $dadosNacionalidade = json_decode($respostaNacionalidade, true);

            return view('mostra-resultado', ['dadosIdade'=> $dadosIdade], ['dadosNacionalidade'=> $dadosNacionalidade]);
        }
    }
    

