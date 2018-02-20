@extends('layouts.app')

@section('title', 'Crear Telefono')

@section('content')

<form method="POST" class="form-horizontal" action="{{ route('recursos.telefono.store') }}">
	{{ csrf_field() }}
	
	<fieldset class="form-group">
		<label for="forNumero">Número</label>
		<input type="integer" class="form-control" id="forNumero" placeholder="Número" name="numero" required="required">
	</fieldset>

	<fieldset class="form-group">
		<label for="forMinsal">Minsal</label>
		<input type="integer" class="form-control" id="forMinsal" placeholder="Anexo Minsal" name="minsal" required="required">
	</fieldset>

    
    <button type="submit" class="btn btn-primary">Crear</button>
    
    <a href="{{ route('recursos.telefono.index') }}" class="btn btn-outline-dark">Cancelar</a>

</form>

@endsection