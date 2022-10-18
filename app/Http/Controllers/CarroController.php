<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function FormularioCadastroCarro(){
        return view('cadastrarCarro');
    }

    public function MostrarEditarCarro(){
        $dadosCarro = Carro::all();
        return view('editarCarro', ['registrosCarro' => $dadosCarro]);
    }

    public function SalvarBancoCarro(Request $request){
        $dadosCarro = $request->validate([
            'modelos' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);
        
        Carro::create($dadosCarro);

        return Redirect::route('home');
    }

}
