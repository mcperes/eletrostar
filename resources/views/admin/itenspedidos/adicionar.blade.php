@extends('layout.site');
@section('titulo','Itens de pedido');
@section('conteudo')
    <div class='container'>
        <h3 class='center'>Adicionar item de pedido </h3>
        <div class='row'>
            <form action="{{ route('admin.itenspedidos.salvar',$id_pedido) }}" method='post' >
                {{ csrf_field() }}
                @include('admin.itenspedidos._form')
                <button class='btn deep-orange'>Salvar</button>
                <a class='btn deep-orange' href="{{ route('admin.itenspedidos.listar',$id_pedido) }}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection