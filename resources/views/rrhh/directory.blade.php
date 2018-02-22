@extends('layouts.app')

@section('title', 'Directorio Telefónico')

@section('content')

<div class="clearfix">
	
	<div class="float-left"><h3>Directorio Telefónico</h3></div>

	<div class="float-right">
		<form class="form-inline" method="GET" action="{{ route('rrhh.users.directory') }}">
			<div class="input-group mb-3">
				<input type="text" name="name" class="form-control" placeholder="Nombre de funcionario">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit">
						<i class="fas fa-search" aria-hidden="true"></i></button>
				</div>
			</div>
		</form>
	</div>

</div>

<div class="row">
	@foreach($users as $user)
	<div class="col-md-6">
		<address class="border border p-1">
			<strong>{{ $user->name }}</strong>
			<br>

			@if($user->position OR $user->organizationalunit)
			<small class="text-muted">
				@if($user->position == 'Jefe' OR $user->position == 'Director')
					{{ $user->position }} 
				@elseif($user->position != NULL)
					<em>{{ $user->position }} - </em> 
				@endif

				{{ optional($user->organizationalunit)->name }}
				
			</small>
			<br>
			@endif

			<small>Servicio de Salud Iquique</small><br>

			@if($user->email)
			<a href="mailto:{{ $user->email }}"><i class="fas fa-envelope"></i> {{ $user->email }}</a>
			<br>
			@endif

			<a href="tel:+56{{ $user->telephone->number }}"><i class="fas fa-phone"></i> 
				<abbr title="Teléfono"> {{ $user->telephone->number }} </abbr>
			</a> - <i class="fas fa-phone-square"></i> 
				<abbr title="Anexo Minsal">{{ $user->telephone->minsal }}</abbr>

		</address>
	</div>
	@endforeach
</div>
{{ $users->render() }}

@endsection