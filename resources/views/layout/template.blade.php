<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notícias - @yield('titulo')</title>
    <base href="http://localhost:8000">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">Notícias</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                @yield('conteudo')
            </div>
            <div class="col-12 col-md-3">
                <h2>Categorias:</h2>
                <x-sidebar/>
            </div>
        </div>
    </div>

    <footer class="bg-light">
        <p class="text-center">Site de Notícias</p>
    </footer>
</body>
</html>