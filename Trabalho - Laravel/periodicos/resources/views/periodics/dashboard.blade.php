@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md10 offset-md-1 dashboard-title-container">
    <h1>Minhas publicações</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($periodics) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Publicação</th>
                <th scope="col">Editora</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($periodics as $publicacoes)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><a>{{ $publicacoes->titulo }}</a></td>
                    <td><a>{{ $publicacoes->editora }}</a></td>
                    <td>
                        <a href="/periodics/edit/{{ $publicacoes->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                        <form action="/periodics/{{ $publicacoes->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não tem publicações, <a href="/periodics/create">Fazer uma publicação</a></p>
    @endif
</div>
<div class="col-md10 offset-md-1 dashboard-title-container">
    <h1>Minhas assinaturas</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
@if(count($publicacoesAsParticipant) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Publicação</th>
                <th scope="col">Editora</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($publicacoesAsParticipant as $publicacoes)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><a>{{ $publicacoes->titulo }}</a></td>
                    <td><a>{{ $publicacoes->editora }}</a></td>
                    <td>
                        <form action="/periodics/leave/{{ $publicacoes->id }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">
                                <ion-icon name="trash-outline"></ion-icon>
                                Cancelar assinatura
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Você não possui nenhuma assinatura, <a href="/">Veja para assinar</a></p>
@endif
</div>
@endsection