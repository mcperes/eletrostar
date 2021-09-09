<div class="input-field">
  <input type="text" name="qtd" id="qtd" value="{{isset($linha->qtd) ? $linha->qtd : ''}}">
  <label>Quant</label>
</div>

@php 
    // testa se é inclusao pq se for, 
    // nao tem valor em $linha
    // guarda em $_id_produto pra testar
    // dentro do foreach
    if ( isset($linha->id_produto) ) {
         $_id_produto = $linha->id_produto;
         $escolha = "";
    } else {
      $_id_produto = "-1";
      $escolha = "<option value='0' selected>Escolha</option>";
    }
@endphp 

<div class="input-field col s12">
  <select name="id_produto" id="id_produto">
    @php 
       // imprime opcao com mensagem 'escolha' se inclusao
       echo $escolha;  
    @endphp
    <!-- faz laco para imprimir opcoes -->    
    @foreach($LookProdutos as $LookProduto)
      @php 
         // define qual opcao esta preselecionada
         $selected = $LookProduto->id_produto == $_id_produto ? 'selected' : '';  
      @endphp
      <option value="{{$LookProduto->id_produto}}" {{ $selected }}>{{$LookProduto->descricao}}</option>
    @endforeach
  </select>
  <label>Produto</label>
</div>

