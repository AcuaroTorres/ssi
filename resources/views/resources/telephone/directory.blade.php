@extends('layouts.app')

@section('title', 'Directorio Telefónico')

@section('content')

<h3>Directorio Telefónico</h3>

@foreach($telephones as $telephone)

	<address class="border border p-1">
		<strong>{{ $telephone->user->name }}</strong>
		<br>

		@if($telephone->user->position OR $telephone->user->organizationalunit)
		<small class="text-muted">
			@if($telephone->user->position == 'Jefe' OR $telephone->user->position == 'Director')
				{{ $telephone->user->position }} 
			@else
				<em>{{ $telephone->user->position }}</em> - 
			@endif

			@if($telephone->user->organizationalunit)
				{{ @$telephone->user->organizationalunit->name?:'' }}
			@endif
		</small>
		<br>
		@endif

		<small>Servicio de Salud Iquique</small><br>

		@if($telephone->user->email)
		<a href="mailto:{{ $telephone->user->email }}"><i class="fas fa-envelope"></i> {{ $telephone->user->email }}</a>
		<br>
		@endif

		<a href="tel:+56{{ $telephone->number }}"><i class="fas fa-phone"></i> 
			<abbr title="Teléfono"> {{ $telephone->number }} </abbr>
		</a> - <i class="fas fa-phone-square"></i> 
			<abbr title="Anexo Minsal">{{ $telephone->minsal }}</abbr>

	</address>

@endforeach

@endsection