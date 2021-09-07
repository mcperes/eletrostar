
@extends('layout.site')

@section('titulo','Unidades')

@section('conteudo')

<div class='container'>
    <h3 class='center'>Lista de Unidades</h3>
    <div class='row'>
        <table>
            <thead>
                <tr>  <!-- CABECALHO -->
                    <td>Id</td><td>Descrição</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
                @foreach($linhas as $linha)   <!-- LOOP PRA LER A TABELA -->
                <tr>
                    <td>{{ $linha->id_unidade }}</td><td>{{ $linha->descricao }}</td>
                    <td>   <!-- COLUNA COM ALTERAR E EXCLUIR -->
                        <a class='btn deep-orange' href="{{ route('admin.unidades.editar',$linha->id_unidade) }}">Alterar</a>
                        <a class='btn red' href="{{ route('admin.unidades.excluir',$linha->id_unidade) }}">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
    <div class='row'>  <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('admin.unidades.adicionar')}}">Adicionar</a>
    </div>
</div>

@endsection