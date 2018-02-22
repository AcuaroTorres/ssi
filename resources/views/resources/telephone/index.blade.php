@extends('layouts.app')

@section('title', 'Lista de Telefonos')

@section('content')

<h3 class="inline">Telefonos

<a href="{{ route('resources.telephones.create') }}" class="btn btn-primary">Crear</a>
</h3>
<br>

<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col"></th>
			<th scope="col">Número</th>
			<th scope="col">Minsal</th>
			<th scope="col">Asociado a</th>
			<th scope="col">Accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($telephones as $key => $telephone)
		<tr>
			<td>{{ ++$key }} </td>
			<td>{{ $telephone->number }}</td>
			<td>{{ $telephone->minsal }}</td>
			<td>{{ @$telephone->user->name ?: '' }}</td>
			<td>
				<a href="{{ route('resources.telephones.edit', $telephone->id) }}" class="btn btn-outline-secondary">
				<span class="fas fa-edit" aria-hidden="true"></span></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection