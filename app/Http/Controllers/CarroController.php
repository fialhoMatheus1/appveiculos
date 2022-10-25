<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function FormularioCadastroCarro()
    {
        return view('cadastrarCarro');
    }

    public function SalvarBancoCarro(Request $request)
    {
        $dadosCarro = $request->validate([
            'modelos' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);

        Carro::create($dadosCarro);

        return Redirect::route('cadastrar-carro');
    }

    public function MostrarEditarCarro(Request $request)
    {
        //função para buscar por marca:
        $dadosCarro = Carro::query();
        $dadosCarro->when($request->marca, function ($query, $vl) {
            $query->where('marca', 'like', '%' . $vl . '%');
        });
        //guardas os dados do banco em uma outra variavel.
        $dadosCarro = $dadosCarro->get();
        return view('editarCarro', ['registrosCarro' => $dadosCarro]);
    }

    public function MostrarAlterarCarro(Carro $registrosCarros)
    {
        return view('alterarCarro', ['registrosCarros' => $registrosCarros]);
    }

    //metodo editar:
    public function AlterarBancoCarro(Carro $registrosCarros, Request $request)
    {
        $banco = $request->validate([
            'modelos' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);
        $registrosCarros->fill($banco);
        $registrosCarros->save();
        return Redirect::route('editar-carro');
    }

    public function ApagarBancoCarro(Carro $registrosCarros)
    {
        //deletar os dados do caminhão, salvos na variavel local carro
        //dd($registrosCarros);
        $registrosCarros->delete();
        //efetua a exclusao e redireciona de volta para  pagina de edicao
        return Redirect::route('editar-carro');
    }
}
