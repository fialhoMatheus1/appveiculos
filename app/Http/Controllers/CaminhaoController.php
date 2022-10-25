<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Caminhao;

class CaminhaoController extends Controller
{
    public function FormularioCadastro()
    {
        return view('cadastrarCaminhao');
    }

    //metodo cadastrar:
    public function SalvarBanco(Request $request)
    {
        $dadosCaminhao = $request->validate([
            'modelos' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);

        Caminhao::create($dadosCaminhao);

        return Redirect::route('cadastrar-caminhao');
    }

    //metodo para mostrar os cadastros:
    public function MostrarEditarCaminhao(Request $request)
    {
        //função para buscar por marca:
        $dadosCaminhao = Caminhao::query();
        $dadosCaminhao->when($request->marca,function($query, $vl){
            $query->where('marca','like','%' .$vl. '%');
        });
        //guardas os dados do banco em uma outra variavel.
        $dadosCaminhao = $dadosCaminhao->get();
        return view('editarCaminhao', ['registrosCaminhao' => $dadosCaminhao]);
    }

    public function MostrarAlterarCaminhao(Caminhao $registrosCaminhoes)
    {
        return view('alterarCaminhao', ['registrosCaminhoes' => $registrosCaminhoes]);
    }

    //metodo editar:
    public function AlterarBancoCaminhao(Caminhao $registrosCaminhoes, Request $request)
    {
        $banco = $request->validate([
            'modelos' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);
        $registrosCaminhoes->fill($banco);
        $registrosCaminhoes->save();
        return Redirect::route('editar-caminhao');
    }

    //metodo deletar:
    public function ApagarBancoCaminhao(Caminhao $registrosCaminhoes)
    {
        //deletar os dados do caminhão, salvos na variavel local caminhao
        //dd($registrosCaminhoes);
        $registrosCaminhoes->delete();
        //efetua a exclusao e redireciona de volta para  pagina de edicao
        return Redirect::route('editar-caminhao');
    }
}//fim da classe
