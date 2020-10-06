@extends('layouts.site')

@section('titulo','Editar Tabeliao')
@section('conteudo')
    <div class="container">
        <h3>Editar Tabeliao</h3>
        <div class="row"> 
            <form action="{{ route('atualizar', $tabeliao->id) }}" method="post">
                @csrf
                {{-- @method('put') --}}
                <input type="hidden" name="_method" value="put">
                @include('layouts.Tabeliao.tabForm')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>       
        </div>
    </div>
@endsection()