@extends('layouts.main')

@section('title', 'Editando a publicação: ' . $publicacoes->titulo)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando a publicação: {{ $publicacoes->titulo }}</h1>
    <form action="/periodics/update/{{ $publicacoes->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem da publicação:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            <img src="/img/publicacoes/{{ $publicacoes->image }}" alt="{{ $publicacoes->titulo }}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Publicação:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título da prublicação" value="{{ $publicacoes->titulo }}">
        </div>
        <div class="form-group">
            <label for="title">Editora:</label>
            <input type="text" class="form-control" id="editora" name="editora" placeholder="Nome da editora" value="{{ $publicacoes->editora }}">
        </div>
        <div class="form-group">
            <label for="title">Selecione a área do conhecimento:</label>
            <div class="form-grup">
                <input type="checkbox" name="items[]" value="Ciência"> Ciência
            </div>
            <div class="form-grup">
                <input type="checkbox" name="items[]" value="Literatura"> Literatura
            </div>
            <div class="form-grup">
                <input type="checkbox" name="items[]" value="Programação"> Programação
            </div>
            <div class="form-grup">
                <input type="checkbox" name="items[]" value="Educação"> Educação
            </div>
        </div>
        <div class="form-group">
            <label for="valor">Valor da assinatura:</label>
            <input type="value" class="form-control" id="valor" name="valor" placeholder="Qual o valor da assinatura?" value="{{ $publicacoes->valor }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Publicar">
    </form>
</div>

@endsection