@extends('layouts.app')

@section('title', 'Crear Cargo')

@section('content')

<form method="POST" class="form-horizontal" action="{{ route('rrhh.cargos.store') }}">
	{{ csrf_field() }}

	<fieldset class="form-group">
		<label for="forName">Nombre del Cargo</label>
		<input type="text" class="form-control" id="forName" placeholder="Nombre del cargo" name="name" required="required">
	</fieldset>

      
    <button type="submit" class="btn btn-primary">Crear</button>

    <a href="{{ route('rrhh.cargos.index') }}" class="btn btn-outline-dark">Cancelar</a>

</form>

@endsection