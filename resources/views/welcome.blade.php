@extends('layouts.main')

@section('title', 'SAR Noticias')

@section('content')
    @if($search == '')
    <div class="container">
        <div class="row">
        <div class="col-md-8">
            <div class="card mb-3">
            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Imagem da Notícia">
            <div class="card-body">
                <h5 class="card-title">Título da Notícia</h5>
                <p class="card-text">Descrição breve da notícia.</p>
                <p class="card-text"><small class="text-muted">Publicado em: DD/MM/AAAA</small></p>
            </div>
            </div>
            <div class="card mb-3">
            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Imagem da Notícia">
            <div class="card-body">
                <h5 class="card-title">Título da Notícia</h5>
                <p class="card-text">Descrição breve da notícia.</p>
                <p class="card-text"><small class="text-muted">Publicado em: DD/MM/AAAA</small></p>
            </div>
            </div>
            <div class="card mb-3">
            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Imagem da Notícia">
            <div class="card-body">
                <h5 class="card-title">Título da Notícia</h5>
                <p class="card-text">Descrição breve da notícia.</p>
                <p class="card-text"><small class="text-muted">Publicado em: DD/MM/AAAA</small></p>
            </div>
            </div>
        </div>
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
    @else
    <p> O usuário está buscando por {{ $search }}
    @endif
@endsection