@extends('layouts.main')

@section('title', $news->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/news/{{$news->image}}" alt="{{$news->title}}" class="img-fluid">
            </div>
            <div id="info-container" class="col-md-12">
                <h1>{{$news->title}}</h1>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre a noticia</h3>
                <p class="news-description">{{$news->full_description}}</p>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Palavras chave:</h3>
                @foreach($news-> key_words as $key_word)
                <p class="key-words">{{$key_word}}</p>
                @endforeach
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Data da Notícia:</h3>
                <p class="date">{{date('d/m/Y',strtotime($news->date))}}</p>
            </div>
        </div>
    </div>

@endsection