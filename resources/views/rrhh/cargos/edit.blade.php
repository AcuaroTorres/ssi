@extends('layouts.app')

@section('title', 'Editar Cargo')

@section('content')
<form method="POST" class="form-horizontal" action="{{ route('rrhh.cargos.update',$cargo->id) }}">
	{{ method_field('PUT') }} {{ csrf_field() }}

	<fieldset class="form-group">
		<label for="forName">Nombre</label>
		<input type="text" class="form-control" id="forName" name="name" value="{{ $cargo->name }}"></div>
	</fieldset>

	<fieldset class="form-group d-inline">
		<button type="submit" class="btn btn-primary"><span class="fas fa-save" aria-hidden="true"></span> Actualizar</button>
		</form>
	
		<a href="{{ route('rrhh.cargos.index') }}" class="btn btn-outline-dark">Cancelar</a>

		<form method="POST" action="{{ route('rrhh.cargos.destroy', $cargo->id) }}" class="d-inline">
			{{ method_field('DELETE') }} {{ csrf_field() }}
			<button class="btn btn-danger"><span class="fas fa-trash" aria-hidden="true"></span> Eliminar</button>
		</form>
	</fieldset>

@endsection