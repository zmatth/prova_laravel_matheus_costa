@extends('layouts.site')

@section('titulo','Adicionar Certidao')

@section('conteudo')
    <div class="container">
        <h3>Adicionar Certidão</h3>
        <div class="row">
            <form action="{{route('salvar.certidao')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('layouts.Certidao.certForm')
                    <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection