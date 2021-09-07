@extends('layout.site');
@section('titulo','Produtos');
@section('conteudo')
    <div class='container'>
        <h3 class='center'>Editar produto </h3>
        <div class='row'>
            <form action="{{ route('admin.produtos.atualizar', $linha->id_produto) }}" method='post' >
                {{ csrf_field() }}
                <input type="hidden" name='_method' value='put'>
                @include('admin.produtos._form')
                <button class='btn deep-orange'>Atualizar</button>
            </form>
        </div>
    </div>
@endsection