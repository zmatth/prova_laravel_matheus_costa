@extends('layouts.site')

@section('titulo','Lista de Tabeliões')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2>Lista de Tabelioes</h2>
        </div>
        <div class="col-2">
        <a href="{{route('adicionar')}}" class="btn btn-success">Incluir</a>
        </div>
    </div>
    <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th class="scope">Id</th>
                        <th class="scope">Nome Tabelião</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabelioes as $tabeliao)
                    <tr>
                    <td>{{$tabeliao->id}}</td>
                    <td>{{$tabeliao->nome}}</td>
                        <td>
                        <a href="{{route('editar', $tabeliao->id)}}" class="btn btn-primary">Editar</a>

                        <form action="{{route('deletar', $tabeliao->id)}}" method="POST">
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