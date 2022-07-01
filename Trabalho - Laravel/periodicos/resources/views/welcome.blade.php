@extends('layouts.main')

@section('title', 'Periódicos')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque por publicações</h1>
    <form action="/" method="get">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Publicados</h2>
    <div id="cards-container" class="row">
        @foreach($publicacoes as $publicacoes)
            <div class="card col-md-3">
                <img src="/img/publicacoes/{{ $publicacoes->image }}" alt="{{ $publicacoes->titulo }}">
                <div class="class-body">
                    <h5 class="card-title">Revista: {{ $publicacoes->titulo }}</h5>
                    <p class="card-editora">Editora: {{ $publicacoes->editora }}</p>
                    <p class="card-editora">Área:</p>
                    <ul id="items-list">
                        @foreach($publicacoes->items as $item)
                            <li><ion-icon name="play-outline"></ion-icon>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <p class="card-valor">Valor: R$ {{ number_format($publicacoes->valor,2,",",".") }}</p>

                        <form href="/periodics/join/{{ $publicacoes->id }}" method="GET">
                                @csrf
                                <a href="/periodics/join/{{ $publicacoes->id }}"
                                class="btn btn-primary"
                                id="event-submit"
                                onClick="publicacoes.preventDefault();
                                this.closest('form').submit();">                                
                                    Assinar
                                </a>
                        </form>
                    
                </div>
            </div>
        @endforeach
        
    </div>
</div>

@endsection