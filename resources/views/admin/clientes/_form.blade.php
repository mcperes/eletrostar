<div class="input-field">
  <input type="text" name="nome" value="{{isset($linha->nome) ? $linha->nome : ''}}">
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="text" name="CNPJ" value="{{isset($linha->CNPJ) ? $linha->CNPJ : ''}}">
  <label>CNPJ</label>
</div>

<div class="input-field">
  <input type="text" name="endereco" value="{{isset($linha->endereco) ? $linha->endereco : ''}}">
  <label>Endereço</label>
</div>

<div class="input-field">
  <input type="text" name="cep" value="{{isset($linha->cep) ? $linha->cep : ''}}">
  <label>CEP</label>
</div>

<div class="input-field">
  <input type="text" name="bairro" value="{{isset($linha->bairro) ? $linha->bairro : ''}}">
  <label>Bairro</label>
</div>

<div class="input-field">
  <input type="text" name="cidade" value="{{isset($linha->cidade) ? $linha->cidade : ''}}">
  <label>Cidade</label>
</div>

<div class="input-field">
  <input type="text" name="UF" value="{{isset($linha->UF) ? $linha->UF : ''}}">
  <label>UF</label>
</div>

<div class="input-field">
  <input type="text" name="datacad" value="{{isset($linha->datacad) ? $linha->datacad : ''}}">
  <label>Data cad</label>
</div>

