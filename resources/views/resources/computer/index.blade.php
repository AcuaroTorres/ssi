@extends('layouts.app')

@section('title', 'Lista de Computadores')

@section('content')

<h3 class="inline">Computadores

<a href="{{ route('resources.computers.create') }}" class="btn btn-primary">Crear</a>
</h3>
<br>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Serial</th>
			<th>IP</th>
			<th>Asociado a:</th>
		</tr>
	</thead>
	<tbody>
		@foreach($computers as $computer)
		<tr>
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