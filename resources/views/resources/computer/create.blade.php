@extends('layouts.app')

@section('title', 'Crear Computador')

@section('content')

<h3>Crear nuevo Computador</h3>

<form method="POST" class="form-horizontal" action="{{ route('resources.computers.store') }}">
	{{ csrf_field() }}
	
	<fieldset class="form-group">
		<label for="forBrand">Marca</label>
		<input type="text" class="form-control" id="forBrand" placeholder="Marca" name="brand" required="required">
	</fieldset>

	<fieldset class="form-group">
		<label for="forModel">Modelo</label>
		<input type="text" class="form-control" id="forModel" placeholder="Modelo del equipo" name="model" required="required">
	</fieldset>

	<fieldset class="form-group">
		<label for="forSerial">Serial</label>
		<input type="text" class="form-control" id="forSerial" placeholder="Serial del equuipo" name="serial">
	</fieldset>

	<fieldset class="form-group">
		<label for="forIP">Número IP</label>
		<input type="IP" class="form-control" id="forIP" placeholder="10.x.x.x" name="ip">
	</fieldset>
   
   	<hr class="mt-4">

	<fieldset class="form-group b">
		<label for="forUsers">Asignar a:</label>	
		<select class="custom-select" id="forUsers" name="user">
			<option></option>
			@foreach($users as $user)
				<option value="{{ $user->id }}">{{ $user->name }}</option>
			@endforeach
		</select>
	</fieldset>
	
    <button type="submit" class="btn btn-primary">Crear</button>
    
    <a href="{{ route('resources.computers.index') }}" class="btn btn-outline-dark">Cancelar</a>

</form>

@endsection