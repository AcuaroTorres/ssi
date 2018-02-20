@extends('layouts.app')

@section('title', 'Editar Telefono')

@section('content')

<form method="POST" class="form-horizontal" action="{{ route('resources.telephones.update',$telephone->id) }}">
	{{ method_field('PUT') }} {{ csrf_field() }}

	<fieldset class="form-group">
		<label for="forNumero">Número</label>
		<input type="integer" class="form-control" id="forNumero" name="number" value="{{ $telephone->number }}">
	</fieldset>


	<fieldset class="form-group">
		<label for="forMinsal">Minsal</label>
		<input type="integer" class="form-control" id="forMinsal" name="minsal" value="{{ $telephone->minsal }}">
	</fieldset>

	<fieldset class="form-group">
		<label for="forUsers">Asignar a:</label>	
		<select class="custom-select" id="forUsers" name="user">
			<option></option>
			@foreach($users as $user)
				<option value="{{ $user->id }}" @if ($user == $telephone->user) selected="selected" @endif>{{ $user->name }}</option>
			@endforeach
		</select>
	</fieldset>

	<fieldset class="form-group">
		<button type="submit" class="btn btn-primary">
			<span class="fas fa-save" aria-hidden="true"></span> Actualizar</button>
		
		</form>

		<a href="{{ route('resources.telephones.index') }}" class="btn btn-outline-dark">Cancelar</a>

		<form method="POST" action="{{ route('resources.telephones.destroy', $telephone->id) }}" class="d-inline">
			{{ method_field('DELETE') }} {{ csrf_field() }}
			<button class="btn btn-danger"><span class="fas fa-trash" aria-hidden="true"></span> Eliminar</button>
		</form>
		
	</fieldset>

@endsection