@extends('layouts.app')

@section('title', 'Lista de Unidades Organizacionales')

@section('content')

<h3>Unidades organizacionales</h3>

<a href="{{ route('rrhh.organizationalUnits.create') }}" class="btn btn-primary mb-4">Crear</a>

<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col"></th>
			<th scope="col">Nombre</th>
			<th scope="col">Accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($organizationalUnits as $key => $organizationalUnit)
		<tr>
			<td scope="row">{{ ++$key }} </td>
			<td>{{ $organizationalUnit->name }}</td>
			<td>
				<a href="{{ route('rrhh.organizationalUnits.edit', $organizationalUnit->id) }}" class="btn btn-outline-secondary">
				<span class="fas fa-edit" aria-hidden="true"></span></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection