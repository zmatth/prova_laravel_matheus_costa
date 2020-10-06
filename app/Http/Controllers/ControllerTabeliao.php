<?php

namespace App\Http\Controllers;
use App\Tabeliao;

use Illuminate\Http\Request;

class ControllerTabeliao extends Controller
{

    public function home()
    {
        return view('home');
    }
    public function tabelioes(Request $requisicao)
    {
        $tabelioes = Tabeliao::all();
        return view('layouts.Tabeliao.listar', compact('tabelioes'));
    }
    public function listar(Request $requisicao)
    {
        $tabelioes = Tabeliao::all();
        return view('layouts.Tabeliao.listar', compact('tabelioes'));
    }

    public function adicionar() {
        return view('layouts.Tabeliao.adicionar');
    }

    public function salvar(Request $requisicao)
    {

        $tabeliao = $requisicao->all();   

        Tabeliao::create($tabeliao);

        return redirect()->route('listar');
    }

    public function editar($id)
    {
        $tabeliao = Tabeliao::find($id);
        return view('layouts.Tabeliao.editar',compact('tabeliao'));
    }

    public function atualizar(Request $requisicao, $id)
    {
        $tabeliao = $requisicao->all();


        $tabeliaoSelecionado = Tabeliao::find($id);
        $tabeliaoSelecionado ->update($tabeliao);

        return redirect()->route('home');

    }

    public function deletar(Request $requisicao, $id)
    {
        $tabeliao = Tabeliao::find($id);

        $tabeliao->delete();
        
        return redirect()->route('tabelioes');
    }


    
}
