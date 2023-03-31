@extends('layouts.main')

@section('title', 'Dashboard')
         
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
    <tbody>
        @foreach($events as $event)
            <tr>
                <td scropt="row">{{ $loop->index +1 }}</td>
                <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                <td>{{ count($event->users) }}</td>
                <td>
    <a href="/events/edit/{{ $event->id }}" class="btn btn-info btn-sm edit-btn align-middle"><ion-icon name="create-outline"></ion-icon> Editar</a>
    <form action="/events/{{ $event->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm delete-btn align-middle"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
    </form>
</td>
            </tr>
        @endforeach
    </tbody>
    </table>
    @else
    <p>Você ainda não tem events, <a href="/events/create">Criar Eventos</a></p>
    @endif
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Eventos que estou participando</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($eventsasparticipant) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
    <tbody>
        @foreach($eventsasparticipant as $event)
            <tr>
             <td scope="row">{{ $loop->index +1 }}</td>
                <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                <td>{{ count($event->users) }}</td>
                <td>
                    <form action="/events/leave/{{ $event->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger btn-sm delete-btn d-flex align-items-center w-auto" style="white-space: nowrap;"><ion-icon name="trash-outline" class="mr-1"></ion-icon> Sair do Evento</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    @else
        <p>Você ainda não está participando de nenhum evento!, <a href="/">Veja todos os Eventos!</a></p>
    @endif    
</div>
@endsection