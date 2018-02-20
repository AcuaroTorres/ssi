@extends('layouts.app')

@section('title', 'Crear Telefono')

@section('content')

<h3>Crear nuevo Teléfono</h3>

<form method="POST" class="form-horizontal" action="{{ route('resources.telephones.store') }}">
	{{ csrf_field() }}
	
	<fieldset class="form-group">
		<label for="forNumero">Número</label>
		<input type="integer" class="form-control" id="forNumero" placeholder="Número" name="number" required="required">
	</fieldset>

	<fieldset class="form-group">
		<label for="forMinsal">Minsal</label>
		<input type="integer" class="form-control" id="forMinsal" placeholder="Anexo Minsal" name="minsal" required="required">
	</fieldset>

    
    <button type="submit" class="btn btn-primary">Crear</button>
    
    <a href="{{ route('resources.telephones.index') }}" class="btn btn-outline-dark">Cancelar</a>

</form>

@endsection