
@extends('layout.site')

@section('titulo','Itens de pedido')

@section('conteudo')

<div class='container'>
    <h4 class='center'>Itens do Pedido {{ $descpedido }}</h4>
    <h4 class='center'>{{ $nomecliente }}</h4>
    <div style="display: none">
	  {{ $total = 0 }}
    </div>
    <div class='row'>
    
        <table>
            <thead>
                <tr>  <!-- CABECALHO -->
                    <td>Ref</td><td>Produto</td><td>Quant</td><td>Unid</td><td>Preço</td><td>Sub</td>
                    <td>Ação</td>
                </tr>
            </thead>

            <tbody>
                @foreach($items as $item)   <!-- LOOP PRA LER A TABELA -->
                <tr>
                    <div style="display: none">{{$total += $item->valitem}}</div>    
                    <td>{{ $item->referencia }}</td><td>{{ $item->descricao }}</td><td style="text-align: right;">{{ $item->qtd }}</td><td>{{ $item->uniddesc }}</td>
                    <td style="text-align: right;">{{ 'R$ '.number_format($item->valor, 2, ',', '.') }}</td><td style="text-align: right;">{{ 'R$ '.number_format($item->valitem, 2, ',', '.') }}</td>
                    <td>   <!-- COLUNA COM ALTERAR E EXCLUIR -->
                        <a class='btn deep-orange' href="{{ route('admin.itenspedidos.editar',$item->id_item) }}">Alterar</a>
                        <a class='btn red' href="{{ route('admin.itenspedidos.excluir',$item->id_item) }}">Excluir</a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td>Total: {{ 'R$ '.number_format($total, 2, ',', '.') }}</td>
                </tr>          
            </tbody>
        </table>   
    </div>
    <div class='row'>  <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('admin.itenspedidos.adicionar',$item->id_pedido)}}">Adicionar Item</a>
        <a class='btn blue' href="{{ route('admin.pedidos')}}">Voltar</a>

    </div>
</div>

@endsection