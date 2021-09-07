@extends('layout.site');
@section('titulo','Unidades');
@section('conteudo')
    <div class='container'>
        <h3 class='center'>Editar unidade </h3>
        <div class='row'>
            <form action="{{ route('admin.unidades.atualizar', $linha->id_unidade) }}" method='post' >
                {{ csrf_field() }}
                <input type="hidden" name='_method' value='put'>
                @include('admin.unidades._form')
                <button class='btn deep-orange'>Atualizar</button>
            </form>
        </div>
    </div>
@endsection