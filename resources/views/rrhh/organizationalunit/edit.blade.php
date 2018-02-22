@extends('layouts.app')

@section('title', 'Editar Unidad Organizacional')

@section('content')

<h3>Editar Unidad Organizacional</h3>

<form method="POST" class="form-horizontal" action="{{ route('rrhh.organizationalunits.store') }}">
	{{ csrf_field() }}
	
	<fieldset class="form-group">
		<label for="forOrganizationalunit">Marca</label>
		<input type="text" class="form-control" id="forOrganizationalunit" placeholder="Nombre de la Unidad Organizacional" name="name" value="" required="required">
	</fieldset>
	
    <button type="submit" class="btn btn-primary">Crear</button>
    
    <a href="{{ route('rrhh.organizationalunits.index') }}" class="btn btn-outline-dark">Cancelar</a>

</form>

@endsection