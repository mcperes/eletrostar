<div class="input-field">
  <input type="text" name="qtd" id="qtd" value="{{isset($linha->qtd) ? $linha->qtd : ''}}">
  <label>Quant</label>
</div>

<div class="input-field col s12">
  <select name="id_produto" id="id_produto">
    @foreach($LookProdutos as $LookProduto)
      <option value="{{$LookProduto->id_produto}}" {{ $LookProduto->id_produto == $linha->id_produto ? 'selected' : '' }}>{{$LookProduto->descricao}}</option>
    @endforeach
  </select>
  <label>Produto</label>
</div>

