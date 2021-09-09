<div class="input-field">
   <input type="text" name="data" id="data" value="{{isset($linha->data) ? $linha->data : ''}}">
   <label>Data</label>
</div>

@php 
    // testa se é inclusao pq se for, 
    // nao tem valor em $linha
    // guarda em $_id_cliente pra testar
    // dentro do foreach
    if ( isset($linha->id_cliente) ) {
         $_id_cliente = $linha->id_cliente;
         $escolha = "";
    } else {
      $_id_cliente = "-1";
      $escolha = "<option value='0' selected>Escolha</option>";
    }
@endphp 

<div class="input-field col s12">
  <select name="id_cliente" id="id_cliente">
    
    @php 
      // imprime opcao com mensagem 'escolha' se inclusao
      echo $escolha;  
    @endphp
    <!-- faz laco para imprimir opcoes -->
    @foreach($LookClientes as $LookCliente)
       @php 
         // define qual opcao esta preselecionada
         $selected = $LookCliente->id_cliente == $_id_cliente ? 'selected' : '';  
       @endphp
      <option value="{{$LookCliente->id_cliente}}" {{ $selected }}>{{$LookCliente->nome}}</option>
    @endforeach
  </select>
  <label>Cliente</label>
</div>



