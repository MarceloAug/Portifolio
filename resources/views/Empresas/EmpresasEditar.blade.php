
@extends('layout.principal')

@section('conteudo')


 
<form action="/empresas/EditaEmpresa" method="post">

 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
 <input type="hidden" name="ID" value="{{$empresa->ID}}" />
 

	@if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  	<div class="form-group row">
    	<label for="nome" class="col-sm-2 col-form-label">Nome</label>
    	<div class="col-sm-10">
    	  	<input type="text" class="form-control" id="nome" placeholder="nome" name="nome" value="{{$empresa->nome}}">
    	</div>
  	</div>

  	<div class="form-group row">
  	  	<label for="localidade" class="col-sm-2 col-form-label">Localidade</label>
  	  	<div class="col-sm-10">
  	    	<input type="text" class="form-control"  id="localidade" placeholder="localidade" name="localidade" value="{{$empresa->localidade}}">
  	  	</div>
	  </div>
	  
	  
    {{--  <div class="form-group">
        <label>Cargos</label>
        <select name="cargo_id" class="form-control">
            @foreach($cargos as $c)
                <option value="{{$c->ID}}">{{$c->nome}}</option>
            @endforeach
        </select>
    </div>  --}}

	<div class="form-group row">
		<label for="descricao" class="col-sm-2 col-form-label">Descricao</label>
		<div class="col-sm-10">
		  <textArea type="text" class="form-control" id="descricao" placeholder="Escreva uma descricao" name="descricao">{{$empresa->Descricao}}</textArea>
		</div>
  	</div>
	  
  	<div class="form-group row">
	    <div class="col-sm-10">
      		<button type="submit" class="btn btn-primary"> Adicionar</button>
    	</div>
  	</div>
</form>
@stop

	



