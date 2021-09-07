@extends('layout.site');
@section('titulo','Unidades');
@section('conteudo')
    <div class='container'>
        <h3 class='center'>Adicionar unidade </h3>
        <div class='row'>
            <form action="{{ route('admin.unidades.salvar') }}" method='post' >
                {{ csrf_field() }}
                @include('admin.unidades._form')
                <button class='btn deep-orange'>Salvar</button>
            </form>
        </div>
    </div>
@endsection