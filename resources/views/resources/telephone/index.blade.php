@extends('layouts.app')

@section('title', 'Lista de Telefonos')

@section('content')

<h3 class="inline">Telefonos

<a href="{{ route('resources.telephone.create') }}" class="btn btn-primary">Crear</a>
</h3>
<br>

<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Número</th>
			<th>Minsal</th>
			<th>Asociado a</th>
			<th>Accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($telephones as $telephone)
		<tr>
			<td>{{ $telephone->id }}</td>
			<td>{{ $telephone->number }}</td>
			<td>{{ $telephone->minsal }}</td>
			<td>{{ @$telephone->user->name ?: '' }}</td>
			<td>
				<a href="{{ route('resources.telephone.edit', $telephone->id) }}" class="btn btn-outline-secondary">
				<span class="fas fa-edit" aria-hidden="true"></span></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection