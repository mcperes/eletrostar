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

<div class="input-field col s12">
  <select name="id_unidade" id="id_unidade">
    @foreach($LookUnidades as $LookUnidade)
      <option value="{{$LookUnidade->id_unidade}}" {{ $LookUnidade->id_unidade == $linha->id_unidade ? 'selected' : '' }}>{{$LookUnidade->descricao}}</option>
    @endforeach
  </select>
  <label>Unidade</label>
</div>
