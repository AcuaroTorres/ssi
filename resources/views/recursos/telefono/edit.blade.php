@extends('layouts.app')

@section('title', 'Editar Telefono')

@section('content')

<form method="POST" class="form-horizontal" action="{{ route('recursos.telefono.update',$telefono->id) }}">
	{{ method_field('PUT') }} {{ csrf_field() }}

	<fieldset class="form-group">
		<label for="forNumero">Número</label>
		<input type="integer" class="form-control" id="forNumero" name="numero" value="{{ $telefono->numero }}">
	</fieldset>


	<fieldset class="form-group">
		<label for="forMinsal">Minsal</label>
		<input type="integer" class="form-control" id="forMinsal" name="minsal" value="{{ $telefono->minsal }}">
	</fieldset>

	<fieldset class="form-group">
		<label for="forUsers">Asignar a:</label>	
		<select class="custom-select" id="forUsers">
			@foreach($users as $user)
				<option value="{{ $user->id }}">{{ $user->name }}</option>
			@endforeach
		</select>
	</fieldset>

	<fieldset class="form-group">
		<button type="submit" class="btn btn-primary">
			<span class="fas fa-save" aria-hidden="true"></span> Actualizar</button>
		
		</form>

		<a href="{{ route('recursos.telefono.index') }}" class="btn btn-outline-dark">Cancelar</a>

		<form method="POST" action="{{ route('recursos.telefono.destroy', $telefono->id) }}" class="d-inline">
			{{ method_field('DELETE') }} {{ csrf_field() }}
			<button class="btn btn-danger"><span class="fas fa-trash" aria-hidden="true"></span> Eliminar</button>
		</form>
		
	</fieldset>

@endsection