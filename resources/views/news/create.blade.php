@extends('layouts.main')

@section('title', 'Criar Noticias')

@section('content')
<div id="news-create-container" class="col-md-6 offset-md-3">
        <h1>Criar nova Noticia</h1>
        <form action="/news" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Noticia:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titulo da Noticia">
            </div>
            <div class="form-group">
                <label for="title">Descrição breve:</label>
                <input type="text" class="form-control" id="description_min" name="description_min" placeholder="Descrição breve da Noticia">
            </div>
            <div class="form-group">
                <label for="title">Descrição completa:</label>  
                <input type="text" class="form-control" id="full_description" name="full_description" placeholder="Descrição completa da Noticia">
            </div>
            <input type="submit" class="btn btm-primary" value="Criar noticia">
        </form>
    </form>
</div>  
@endsection