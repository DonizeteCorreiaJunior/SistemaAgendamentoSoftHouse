@extends('layout.app')
@section('title', 'Listando todos os registros')

@section('content')
    <h1>SISTEMA PARA AGENDAMENTO</h1>
    <hr>
    <div class="container">
        <table class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
                <th>CPF</th>
                <th>NOME</th>
                <th>CELULAR</th>
                <th>GRADUAÇÃO</th>
                <th>DATA RESERVADA</th>
                <th>
                    <a href="{{ route('agendamentos.create') }}" class="btn btn-info btn-sm">Nova Reserva</a>
                </th>
                src="/storage/photos/{{$agendamento->photo}}">
            </tr>
            </thead>
            <tbody>
            @forelse($agendamentos as $agendamento)
                <tr>
                    <td>{{ $agendamento->CPF }}</td>
                    <td>{{ $agendamento->name }}</td>
                    <td>{{ $agendamento->cellPhone }}</td>
                    <td>{{ $agendamento->graduation }}</td>
                    <td>{{ $agendamento->dateVisit }}</td>
                    <td>
                        <a href="{{route('agendamentos.show', $agendamento->CPF)}}" class="btn btn-warning btn-sm">Visualizar</a>
                        <form method="POST" action="{{ route('agendamentos.destroy', $agendamento->CPF) }}" style="display: inline"
                              onsubmit="return confirm('Deseja excluir este registro?');">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Nenhum registro encontrado para listar</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{$agendamentos->links() }}
    </div>
@endsection
