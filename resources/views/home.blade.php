@extends('layouts.app')

@section('title', config('app.name') . ' - Home')

@section('content')

<h3>Home</h3>

<div class="row">

    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bienvenido</h5>
                <p class="card-text">Texto de bienvenida</p>
                @if (session('status'))
                <div class="alert alert-primary" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <a href="http://www.saludiquique.cl" class="card-link">www.saludiquique.cl</a>
            </div>
        </div>
    </div>
    
    @auth
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Administrador</h5>
                @if(Auth::user()->hasRole('Admin'))
                <h6 class="card-subtitle mb-2 text-muted">Ha accedido como administrador</h6>
                @endif
                <a href="#" class="card-link">link</a>
            </div>
        </div>
    </div>
    @endauth
    
</div>

@endsection