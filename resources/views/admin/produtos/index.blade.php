
@extends('layout.site')

@section('titulo','Produtos')

@section('conteudo')

<div class='container'>
    <h3 class='center'>Lista de Produtos</h3>
    <div class='row'>
        <table>
            <thead>
                <tr>  <!-- CABECALHO -->
                    <td>Id produto</td><td>Ref</td><td>Descrição</td><td>Valor</td><td>Unidade</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
                @foreach($linhas as $linha)   <!-- LOOP PRA LER A TABELA -->
                <tr>
                    <td>{{ $linha->id_produto }}</td><td>{{ $linha->referencia }}</td>
                    <td>{{ $linha->descricao }}</td><td style="text-align: right;">{{ 'R$ '.number_format($linha->valor, 2, ',', '.') }}</td><td>{{ $linha->uniddesc }}</td>
                    <td>   <!-- COLUNA COM ALTERAR E EXCLUIR -->
                    
                        <a class='btn deep-orange' href="{{ route('admin.produtos.editar',$linha->id_produto) }}">Alterar</a>
                        <a class='btn red' href="{{ route('admin.produtos.excluir',$linha->id_produto) }}">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
    <div class='row'>  <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('admin.produtos.adicionar')}}">Adicionar</a>
    </div>
</div>

@endsection