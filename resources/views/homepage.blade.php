<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-Movies</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <h1 class="text-center my-5">FILM</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col my-3">
                    <div class="card my-3 new-card">
                        <h5 class="p-2">{{ $movie->id }}</h5>
                        <h5>{{ $movie->title }}</h5>
                        <h5>{{ $movie->original_title }}</h5>
                        <h5>{{ $movie->nazionality }}</h5>
                        <p class="">Data di uscita:{{ $movie->date }}</p>
                        <h5>Voto {{ $movie->vote }}</h5>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
