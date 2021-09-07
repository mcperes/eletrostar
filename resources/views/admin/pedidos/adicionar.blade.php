@extends('layout.site');
@section('titulo','Pedidos');
@section('conteudo')
    <div class='container'>
        <h3 class='center'>Adicionar pedido </h3>
        <div class='row'>
            <form action="{{ route('admin.pedidos.salvar') }}" method='post' id="_form" >
                {{ csrf_field() }}
                @include('admin.pedidos._form')
                <button class='btn deep-orange'>Salvar</button>
                <a class='btn deep-orange' href="{{ route('admin.pedidos') }}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection