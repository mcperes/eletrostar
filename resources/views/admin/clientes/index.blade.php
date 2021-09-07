
@extends('layout.site')

@section('titulo','Clientes')

@section('conteudo')

<div class='container'>
    <h3 class='center'>Lista de Clientes</h3>
    <div class='row'>
        <table>
            <thead>
                <tr>  <!-- CABECALHO -->
                    <td>Id</td><td>Nome</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
                @foreach($linhas as $linha)   <!-- LOOP PRA LER A TABELA -->
                <tr>
                    <td>{{ $linha->id_cliente }}</td><td>{{ $linha->nome }}</td>
                    <td>   <!-- COLUNA COM ALTERAR E EXCLUIR -->
                        <a class='btn deep-orange' href="{{ route('admin.clientes.editar',$linha->id_cliente) }}">Alterar</a>
                        <a class='btn red' href="{{ route('admin.clientes.excluir',$linha->id_cliente) }}">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
    <div class='row'>  <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('admin.clientes.adicionar')}}">Adicionar</a>
    </div>
</div>

@endsection