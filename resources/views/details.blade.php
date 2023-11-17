<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MesAnimes - Détails</title>
</head>
<body>
    <h1>Détails de l'anime - MesAnimes</h1>

    <!-- Affiche les détails de l'anime sélectionné -->
    <img src="{{ $anime->image }}" alt="{{ $anime->title }}" width="200">
    <h2>{{ $anime->title }}</h2>
    <p>{{ $anime->description }}</p>
</body>
</html>