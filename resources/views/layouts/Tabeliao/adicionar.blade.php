@extends('layouts.site')

@section('titulo','Adicionar Tabeliao')

@section('conteudo')
    <div class="container">
        <h3>Adicionar Tabelião</h3>
        <div class="row">
            <form action="{{route('salvar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('layouts.Tabeliao.tabForm')
                    <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection