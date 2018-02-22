<nav class="navbar navbar-expand-lg navbar-dark bg-nav-gobierno">

    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->

        <!-- Authentication Links -->

        <ul class="navbar-nav mr-auto">
            @auth
            
            <li class="nav-item"><a class="nav-link" href="{{ route('rrhh.users.directory') }}">
                <i class="fas fa-address-book"></i> </a></li>

            <li class="nav-item dropdown 
                @if(Route::currentRouteName()=='rrhh.users.index' OR
                    Route::currentRouteName()=='rrhh.users.create' OR
                    Route::currentRouteName()=='rrhh.organizationalunits.index' OR
                    Route::currentRouteName()=='rrhh.organizationalunits.create' )active @endif">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RRHH</a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item 
                        @if(Route::currentRouteName()=='rrhh.users.index')active @endif" 
                        href="{{ route('rrhh.users.index') }}">Usuarios</a>

                    <a class="dropdown-item 
                        @if(Route::currentRouteName()=='rrhh.organizationalunits.index' OR
                            Route::currentRouteName()=='rrhh.organizationalunits.create')active @endif" 
                        href="{{ route('rrhh.organizationalunits.index') }}">Unidades organizacionales</a>

                </div>

            </li>

            <li class="nav-item dropdown 
                @if(Route::currentRouteName()=='resources.telephones.index' OR
                    Route::currentRouteName()=='resources.telephones.create' OR
                    Route::currentRouteName()=='resources.telephones.edit' OR
                    Route::currentRouteName()=='resources.computers.index' OR
                    Route::currentRouteName()=='resources.computers.create' OR
                    Route::currentRouteName()=='resources.computers.edit'
                    )active @endif">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recursos</a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item 
                        @if(Route::currentRouteName()=='resources.telephones.index' OR
                            Route::currentRouteName()=='resources.telephones.create' OR
                            Route::currentRouteName()=='resources.telephones.edit' )active @endif" 
                    href="{{ route('resources.telephones.index') }}">Teléfonos</a>

                    <a class="dropdown-item 
                        @if(Route::currentRouteName()=='resources.computers.index' OR
                            Route::currentRouteName()=='resources.computers.create' OR
                            Route::currentRouteName()=='resources.computers.edit' )active @endif" 
                    href="{{ route('resources.computers.index') }}">Computadores</a>

                </div>

            </li>
            
            @else
            <li class="nav-item"><a class="nav-link" href="{{ route('rrhh.users.directory') }}">
                <i class="fas fa-address-book"></i> Telefonos</a></li>
            
            @endauth

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Authentication Links -->
            @guest
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a></li>
            @else

            <li class="nav-item dropdown 
                @if(Route::currentRouteName()=='rrhh.password.edit')active @endif">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>

                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item @if(Route::currentRouteName()=='password.edit')active @endif" 
                    href="{{ route('password.edit') }}">Cambiar Clave</a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar Sesión</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                </div>
            @endguest
            
        </ul>

  </div>
</nav>
