

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('layouts.navigation')

    <!--Listado de las 5 recetas en la página principal -->
    <h1>Listado de Recetas</h1>
    <div class="row">
        @foreach($recipes as $recipe)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset($recipe->imagen) }}" class="card-img-top" alt="{{ $recipe->nombre }}" width="100px" height="100px">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('recipe.show', $recipe->id) }}">{{ $recipe->nombre }}</a></h5>
                        <p class="card-text">Dificultad: {{ $recipe->nivel_dificultad }}</p>
                        <p class="card-text">Categoria: {{ $recipe->categoria }}</p>
                        <p class="card-text">Fecha Publicación: {{ $recipe->fecha_publicacion->format('d M, Y') }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    

</body>
</html>