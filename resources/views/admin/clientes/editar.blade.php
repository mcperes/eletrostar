@extends('layout.site');
@section('titulo','Clientes');
@section('conteudo')
    <div class='container'>
        <h3 class='center'>Editar cliente </h3>
        <div class='row'>
            <form action="{{ route('admin.clientes.atualizar', $linha->id_cliente) }}" method='post' >
                {{ csrf_field() }}
                <input type="hidden" name='_method' value='put'>
                @include('admin.clientes._form')
                <button class='btn deep-orange'>Atualizar</button>
            </form>
        </div>
    </div>
@endsection