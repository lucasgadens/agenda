@extends('templates/template')

@section('content')

<!-- Prepended text-->
<div>
  <label for="dono_telefone">Telefone</label>
  <li class="list-group-item"><select id="dono_telefone" name="Dono_Telefone"required >
  <option value="{{$array->nome}}" selected></option>
      @foreach ($collection as $item)
        <option value="{{$array->nome}}">{{$array->nome}}</option>
      @endforeach
     
     </select>
  </li>
</div>

<div class="form-group">
    <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
    <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
        OnKeyPress="formatar('## #####-####', this)">
      </div>
    </div>


    
      <label class="col-md-1 control-label" for="prependedtext">Telefone</label>
       <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
        OnKeyPress="formatar('## #####-####', this)">
      </div>
    </div>
   </div> 

   @endsection 