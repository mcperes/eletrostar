@extends('layout.site');
@section('titulo','Pedidos');
@section('conteudo')
    <div class='container'>
        <h3 class='center'>Editar pedido </h3>
        <div class='row'>
            <form action="{{ route('admin.pedidos.atualizar', $linha->id_pedido) }}" method='post' >
                {{ csrf_field() }}
                <input type="hidden" name='_method' value='put'>
                @include('admin.pedidos._form')
                <button class='btn deep-orange'>Atualizar</button>
                <a class='btn deep-orange' href="{{ route('admin.pedidos') }}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection