@extends('layouts.app')

@section('title', 'Editar Telefono')

@section('content')

<form method="POST" class="form-horizontal" action="{{ route('resources.computers.update',$computer->id) }}">
	{{ method_field('PUT') }} {{ csrf_field() }}

	<fieldset class="form-group">
		<label for="forBrand">Marca</label>
		<input type="text" class="form-control" id="forBrand" name="brand" value="{{ $computer->brand }}">
	</fieldset>


	<fieldset class="form-group">
		<label for="forModel">Modelo</label>
		<input type="text" class="form-control" id="forModel" name="model" value="{{ $computer->model }}">
	</fieldset>

	<fieldset class="form-group">
		<label for="forSerial">Serial</label>
		<input type="text" class="form-control" id="forSerial" name="serial" value="{{ $computer->serial }}">
	</fieldset>

	<fieldset class="form-group">
		<label for="forIP">IP</label>
		<input type="IP" class="form-control" id="forIP" name="ip" value="{{ $computer->ip }}">
	</fieldset>

	<fieldset class="form-group">
		<label for="forUsers">Asignar a:</label>	
		<select class="custom-select" id="forUsers" name="user">
			<option></option>
			@foreach($users as $user)
				<option value="{{ $user->id }}" @if ($user == $computer->user) selected="selected" @endif>{{ $user->name }}</option>
			@endforeach
		</select>
	</fieldset>

	<fieldset class="form-group">
		<button type="submit" class="btn btn-primary">
			<span class="fas fa-save" aria-hidden="true"></span> Actualizar</button>
		
		</form>

		<a href="{{ route('resources.computers.index') }}" class="btn btn-outline-dark">Cancelar</a>

		<form method="POST" action="{{ route('resources.computers.destroy', $computer->id) }}" class="d-inline">
			{{ method_field('DELETE') }} {{ csrf_field() }}
			<button class="btn btn-danger"><span class="fas fa-trash" aria-hidden="true"></span> Eliminar</button>
		</form>
		
	</fieldset>

@endsection