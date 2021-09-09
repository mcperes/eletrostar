<div class="input-field">
  <input type="text" name="referencia" value="{{isset($linha->referencia) ? $linha->referencia : ''}}">
  <label>Referência</label>
</div>
<div class="input-field">
  <input type="text" name="descricao" value="{{isset($linha->descricao) ? $linha->descricao : ''}}">
  <label>Descrição</label>
</div>
<div class="input-field">
  <input type="text" name="valor" value="{{isset($linha->valor) ? $linha->valor : ''}}">
  <label>Valor</label>
</div>

@php 
    // testa se é inclusao pq se for, 
    // nao tem valor em $linha
    // guarda em $_id_unidade pra testar
    // dentro do foreach
    if ( isset($linha->id_unidade) ) {
         $_id_unidade = $linha->id_unidade;
         $escolha = "";
    } else {
      $_id_unidade = "-1";
      $escolha = "<option value='0' selected>Escolha</option>";
    }
@endphp 

<div class="input-field col s12">
  <select name="id_unidade" id="id_unidade">
      @php 
          // imprime opcao com mensagem 'escolha' se inclusao
          echo $escolha;  
      @endphp
      <!-- faz laco para imprimir opcoes -->    
      @foreach($LookUnidades as $LookUnidade)
        @php 
          // define qual opcao esta preselecionada
          $selected = $LookUnidade->id_unidade == $_id_unidade ? 'selected' : '';  
        @endphp      
        <option value="{{$LookUnidade->id_unidade}}" {{ $selected }}>{{$LookUnidade->descricao}}</option>
      @endforeach
  </select>
  <label>Unidade</label>
</div>
