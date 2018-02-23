@extends('layouts.app')

@section('title', 'Crear Unidad Organizacional')

@section('content')

<h3>Crear nuevo Teléfono</h3>

<form method="POST" class="form-horizontal" action="{{ route('rrhh.organizationalUnits.store') }}">
	{{ csrf_field() }}
	
	<fieldset class="form-group">
		<label for="forName">Nombre</label>
		<input type="text" class="form-control" id="forName" placeholder="Nombre de la unidad organizacional" name="name" required="required">
	</fieldset>

    <button type="submit" class="btn btn-primary">Crear</button>
    
    <a href="{{ route('rrhh.organizationalUnits.index') }}" class="btn btn-outline-dark">Cancelar</a>

</form>

@endsection