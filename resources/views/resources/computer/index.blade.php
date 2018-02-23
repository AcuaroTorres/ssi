@extends('layouts.app')

@section('title', 'Lista de Computadores')

@section('content')

<h3>Computadores</h3> 

<a href="{{ route('resources.computers.create') }}" class="btn btn-primary mb-4"> Crear</a>

<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col"></th>
			<th scope="col">Marca</th>
			<th scope="col">Modelo</th>
			<th scope="col">Serial</th>
			<th scope="col">IP</th>
			<th scope="col">Asociado a:</th>
			<th scope="col">Accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($computers as $key => $computer)
		<tr>
			<td scope="row">{{ ++$key }} </td>
			<td>{{ $computer->brand }}</td>
			<td>{{ $computer->model }}</td>
			<td>{{ $computer->serial }}</td>
			<td>{{ $computer->ip }}</td>
			<td>{{ @$computer->user->name ?: '' }}</td>
			<td>
				<a href="{{ route('resources.computers.edit', $computer->id) }}" class="btn btn-outline-secondary">
				<span class="fas fa-edit" aria-hidden="true"></span></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection