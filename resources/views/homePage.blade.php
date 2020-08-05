@extends('layout.app')
@section('title', 'Página Inicial')

@section('content')

    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <strong style="color: white">Sistema para Agendamento - SOFTHOUSE</strong>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuario.create') }}">{{ __('Registre-se') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>

    </header>

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <h1 class="jumbotron-heading">Seja BEM-VINDO(A)!!</h1>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
        </section>
    </main>
    <footer>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <strong style="color: white">Todos os direitos reservados</strong>
        </div>
    </footer>
@endsection
