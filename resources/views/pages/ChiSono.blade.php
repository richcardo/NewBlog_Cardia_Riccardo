<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> About me </menu></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
  </head>
  <body class="bg-dark" >
  <nav class="d-flex justify-content-center p-4 ">
    <a class="text-danger ps-4 text-decoration-none" href="{{ route('welcome') }}">Home Page</a>
    <a class="text-danger ps-4 text-decoration-none " href="{{ route('contacts') }}"> Contatti</a>
    <a class="text-danger ps-4 text-decoration-none " href="{{ route('about-me') }}"> Chi Sono </a>
    <a class="text-danger ps-4 text-decoration-none " href="{{ route('articles') }}"> Articoli </a>
    </nav>
    <h1 class="text-danger ps-3 pb-2">{{ $title }}</h1>
    <p class="text-danger ps-3 " >
        {{ $description }}
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>