@extends('layouts.app')

@section('title', 'Lista de Unidades Organizacionales')

@section('content')

<h3>Unidades organizacionales</h3>

<a href="{{ route('rrhh.organizationalunits.create') }}" class="btn btn-primary mb-4">Crear Unidad Organizacional</a>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($organizationalunits as $organizationalunit)
		<tr>
			<td>{{ $organizationalunit->name }}</td>
			<td>
				<a href="{{ route('rrhh.organizationalunits.edit', $organizationalunit->id) }}" class="btn btn-outline-secondary">
				<span class="fas fa-edit" aria-hidden="true"></span></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection