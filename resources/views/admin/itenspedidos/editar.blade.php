@extends('layout.site');
@section('titulo','Itens de pedido');
@section('conteudo')
    <div class='container'>
        <h3 class='center'>Editar item de pedido </h3>
        <div class='row'>
            <form action="{{ route('admin.itenspedidos.atualizar', $linha->id_item) }}" method='post' >
                {{ csrf_field() }}
                <input type="hidden" name='_method' value='put'>
                @include('admin.itenspedidos._form')
                <button class='btn deep-orange'>Atualizar</button>
                <a class='btn deep-orange' href="{{ route('admin.itenspedidos.listar',$linha->id_pedido) }}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection