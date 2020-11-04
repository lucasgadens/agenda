@extends('templates/template')

@section('content')

<!-- Search input-->
<div class="form-group">
    <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
    <div class="col-md-2">
      <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
    </div>
    <div class="col-md-2">
        <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
      </div>
  </div>
  
  <!-- Prepended text-->
  <div class="form-group">
    <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon">Rua</span>
        <input id="rua" name="rua" class="form-control" placeholder="" required="" readonly="readonly" type="text">
      </div>
      
    </div>
      <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon">Nº <h11>*</h11></span>
        <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
      </div>
      
    </div>
    
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon">Bairro</span>
        <input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
      </div>
      
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-md-2 control-label" for="prependedtext"></label>
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon">Cidade</span>
        <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
      </div>
      
    </div>
    
     <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon">Estado</span>
        <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
      </div>
      
    </div>
  </div>

  @endsection 