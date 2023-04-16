<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- CSS customizado -->
        <link rel="stylesheet" href="css/style.css">
    
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-S7+yoEgJ8a7NzwvGpJ9Ct45i+fn8TL/B+lGkHtivJ7tBQ2t8WjYNz+rgzeCU9Xa3NHqkMQWOMxJc2RrTuv74w=="
        crossorigin="anonymous" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">Meu Site de Notícias</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Notícias</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif
            @yield('content')
        </main>
        <footer class="bg-light py-3">
            <div class="container">
                <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">© 2023 Nome do Site. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Termos de uso</a></li>
                    <li class="list-inline-item"><a href="#">Política de privacidade</a></li>
                    <li class="list-inline-item"><a href="#">Contato</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </footer>
    </body>
    </html>