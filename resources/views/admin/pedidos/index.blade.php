
@extends('layout.site')

@section('titulo','Pedidos')

@section('conteudo')

<div class='container'>
    <h3 class='center'>Lista de Pedidos</h3>
    <div class='row'>
        <table>
            <thead>
                <tr>  <!-- CABECALHO -->
                    <td>Id pedido</td><td>Cliente</td><td>Data</td><td>Total</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
                
                @foreach($linhas as $linha)   <!-- LOOP PRA LER A TABELA -->
                
                <tr>
                
                    <td>{{ $linha->id_pedido }}</td><td>{{ $linha->nome }}</td>
                    <td>{{ $linha->data }}</td><td style="text-align: right;">{{ 'R$ '.number_format($linha->pedtotal, 2, ',', '.') }}</td>
                    
                    <td>   <!-- COLUNA COM ALTERAR E EXCLUIR -->
                        <a class='btn deep-orange' href="{{ route('admin.pedidos.editar',$linha->id_pedido) }}">Alterar</a>
                        <a class='btn red' href="{{ route('admin.pedidos.excluir',$linha->id_pedido) }}">Excluir</a>
                        <a class='btn green' href="{{ route('admin.itenspedidos.listar',$linha->id_pedido) }}">Itens</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
    <div class='row'>  <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('admin.pedidos.adicionar')}}">Adicionar</a>
    </div>
</div>

@endsection