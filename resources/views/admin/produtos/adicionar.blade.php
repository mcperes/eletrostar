@extends('layout.site');
@section('titulo','Produtos');
@section('conteudo')
    <div class='container'>
        <h3 class='center'>Adicionar produto </h3>
        <div class='row'>
            <form action="{{ route('admin.produtos.salvar') }}" method='post' >
                {{ csrf_field() }}
                @include('admin.produtos._form')
                <button class='btn deep-orange'>Salvar</button>
            </form>
        </div>
    </div>
@endsection