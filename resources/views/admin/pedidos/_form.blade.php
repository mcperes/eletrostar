<div class="input-field">
  <input type="text" name="data" id="data" value="{{isset($linha->data) ? $linha->data : ''}}">
  <label>Data</label>
</div>

<div class="input-field col s12">
  <select name="id_cliente" id="id_cliente">
    @foreach($LookClientes as $LookCliente)
      <option value="{{$LookCliente->id_cliente}}" {{ $LookCliente->id_cliente == $linha->id_cliente ? 'selected' : '' }}>{{$LookCliente->nome}}</option>
    @endforeach
  </select>
  <label>Cliente</label>
</div>



