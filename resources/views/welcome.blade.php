@extends('layouts.main')

@section('title', 'SAR Noticias')

@section('content')
    @foreach($news as $new)
    <div class="container">
        <div class="row">
        <div class="col-md-8">
            <div class="card mb-3">
            <img src="/img/news/{{$new->image}}" class="card-img-top" alt="{{$new->title}}">
            <div class="card-body">
                <h5 class="card-title">{{ $new->title }}</h5>
                <p class="card-text">{{ $new->description_min }}</p>
                <p class="card-text"><small class="text-muted">{{ $new->updated_at }}</small></p>
            </div>
            </div>
        </div>
    @endforeach
        <div class="col-md-4">
            <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Últimas Notícias</h5>
                <ul class="list-group">
                <li class="list-group-item">Título da Notícia</li>
                <li class="list-group-item">Título da Notícia</li>
                <li class="list-group-item">Título da Notícia</li>
                <li class="list-group-item">Título da Notícia</li>
                <li class="list-group-item">Título da Notícia</li>
                </ul>
            </div>
            </div>
            <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Categorias</h5>
                <ul class="list-group">
                <li class="list-group-item">Categoria 1</li>
                <li class="list-group-item">Categoria 2</li>
                <li class="list-group-item">Categoria 3</li>
                <li class="list-group-item">Categoria 4</li>
                <li class="list-group-item">Categoria 5</li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection