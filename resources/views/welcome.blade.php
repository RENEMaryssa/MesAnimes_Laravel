<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Animes </title>
</head>
<body>
    <h1>Mes Animes</h1>

    <!-- Affiche les 7 animés avec des liens vers les détails -->
    @foreach($animes as $anime)
        <a href="{{ route('details', ['id' => $anime->id]) }}">
            <img src="{{ $anime->images }}" alt="{{ $anime->title }}" width="100">
            <h3>{{ $anime->title }}</h3>
        </a>
    @endforeach
</body>
</html>
