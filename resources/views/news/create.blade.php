@extends('layouts.main')

@section('title', 'Criar Noticias')

@section('content')
<div id="news-create-container" class="col-md-6 offset-md-3">
        <h1>Criar nova Noticia</h1>
        <form action="/news" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem Noticia:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="title">Noticia:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titulo da Noticia">
            </div>
            <div class="form-group">
                <label for="title">Data da Noticia:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="title">Descrição breve:</label>
                <input type="text" class="form-control" id="description_min" name="description_min" placeholder="Descrição breve da Noticia">
            </div>
            <div class="form-group">
                <label for="title">Descrição completa:</label>  
                <input type="text" class="form-control" id="full_description" name="full_description" placeholder="Descrição completa da Noticia">
            </div>
            <div class="form-group">
                <label for="title">Palavras Chave:</label>  
            
                <div class="form-group">
                    <div class="form-group">
                        <input type="checkbox" name="key_words[]" value="Tecnologia"> Tecnologia
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="key_words[]" value="Agronomia"> Agronomia
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="key_words[]" value="Administração"> Administração
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="key_words[]" value="Direito"> Direito
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="key_words[]" value="Psicologia"> Psicologia
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar noticia">
        </form>
    </form>
</div>  
@endsection