@extends('layouts.site')

@section('titulo','Lista de Certidões')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2>Lista de Certidoes</h2>
        </div>
        <div class="col-2">
        <a href="{{route('adicionar.certidao')}}" class="btn btn-success">Incluir</a>
        </div>
    </div>
    <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th class="scope">Tipo certidao</th>
                        <th class="scope">Primero envolvido</th>
                        <th class="scope">Segundo envolvido</th>
                        <th class="scope">Data da certidao</th>
                        <th class="scope">Nome do tabeliao</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($certidoes as $certidao)
                    <tr>
                    <td>{{$certidao->id}}</td>
                    <td>{{$certidao->nome}}</td>
                        <td>
                        <a href="{{route('editar.certidao', $certidao->id)}}" class="btn btn-primary">Editar</a>

                        <form action="{{route('deletar.certidao', $certidao->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>    
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection