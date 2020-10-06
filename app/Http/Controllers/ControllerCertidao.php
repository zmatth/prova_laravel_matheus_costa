<?php

namespace App\Http\Controllers;


use App\Certidao;
use Illuminate\Http\Request;

class ControllerCertidao extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function tabelioes(Request $requisicao)
    {
        $certidoes = Certidao::all();
        return view('layouts.Certidao.listar', compact('certidoes'));
    }
    public function listar(Request $requisicao)
    {
        $certidoes = Certidao::all();
        return view('layouts.Certidao.listar', compact('certidoes'));
    }

    public function adicionar() {
        return view('layouts.Certidao.adicionar');
    }

    public function salvar(Request $requisicao)
    {

        $certidao = $requisicao->all();   

        Certidao::create($certidao);

        return redirect()->route('listar.certidao');
    }

    public function editar($id)
    {
        $certidao = Certidao::find($id);
        return view('layouts.Certidao.editar.certidao',compact('certidao'));
    }

    public function atualizar(Request $requisicao, $id)
    {
        $certidao = $requisicao->all();


        $certidaoSelecionado = Certidao::find($id);
        $certidaoSelecionado ->update($certidao);

        return redirect()->route('home');

    }

    public function deletar(Request $requisicao, $id)
    {
        $certidao = Certidao::find($id);

        $certidao->delete();
        
        return redirect()->route('certidoes');
    }
}
