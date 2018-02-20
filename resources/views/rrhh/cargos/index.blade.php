@extends('layouts.app')

@section('title', 'Lista de Cargos')

@section('content')

<a href="{{ route('rrhh.cargos.create') }}" class="btn btn-primary mb-4">Crear Cargo</a>


<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($cargos as $cargo)
		<tr>
			<td>{{ $cargo->id }}</td>
			<td>{{ $cargo->name }}</td>
			<td>
				<a href="{{ route('rrhh.cargos.edit', $cargo->id) }}" class="btn btn-outline-secondary">
				<span class="fas fa-edit" aria-hidden="true"></span></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection