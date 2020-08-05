@extends('layout.app')
@section('title', 'Listagem')

@section('content')

    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
                <strong style="color: white">Sistema para Agendamento - SOFTHOUSE</strong>
            <a href="{{ route('usuarios.create') }}" class="btn btn-info btn-sm">Nova Reserva</a>
        </div>
    </header>

    <main role="main">

        <div class="album py-5 bg-light">
            <h1 style="text-align: center" class="jumbotron-heading">Reservas Realizadas</h1>
            <div class="container">
                <div class="row">
                    @forelse($usuarios as $usuario)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top figure-img img-fluid rounded"
                                     src="/storage/{{$usuario->photo}}">
                                <div class="card-body">
                                    <p class="card-text">{{$usuario->CPF}}</p>
                                    <p class="card-text">{{$usuario->name}}</p>
                                    <p class="card-text">{{$usuario->cellPhone}}</p>
                                    <p class="card-text">{{$usuario->graduation}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                                            <form method="post" action="{{ route('usuarios.destroy', $usuario->CPF) }}">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete">
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    APAGAR
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Nenhum registro encontrado para listar</p>
                    @endforelse
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <strong style="color: white">Todos os direitos reservados</strong>
        </div>
    </footer>

@endsection
