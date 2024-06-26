

<!DOCTYPE html>
<html lang="en">
<head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $recipe->nombre }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    @include('layouts.navigation')
    <h1>{{ $recipe->nombre }}</h1>
    <img src="{{ asset($recipe->imagen) }}" alt="{{ $recipe->nombre }}" class="">
    <p><strong>Dificultad:</strong> {{ $recipe->nivel_dificultad }}</p>
    <p><strong>Categoria:</strong> {{ $recipe->categoria }}</p>
    <p><strong>Fecha Publicacion</strong> {{ $recipe->fecha_publicacion->format('d M, Y') }}</p>

</body>

</html>