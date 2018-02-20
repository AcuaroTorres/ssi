@extends('layouts.app')

@section('title', 'Directorio Telefónico')

@section('content')

<h3>Directorio Telefónico</h3>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Número</th>
			<th>Minsal</th>
			<th>Funcionario</th>
			<th>Cargo</th>
		</tr>
	</thead>
	<tbody>
		@foreach($telephones as $telephone)
		<tr>
			<td>{{ $telephone->number }}</td>
			<td>{{ $telephone->minsal }}</td>
			<td>{{ $telephone->user->name }}	</td>
			<td>@foreach($telephone->user->cargos as $cargo)
					{{ $cargo->name }}
				@endforeach
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection