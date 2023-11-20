@extends('modeles/modele')
@section('content')

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.3.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    


    <title>Mes mangas</title>
</head>

<body class="bg">
    <h1> Mes Animes </h1>
    
    <div class="container">
        <div class="row row-cols-4 bg">
            <div class="col">
                <a href="{{ route('details') }}"><img src="{{ asset('images/anime01.jpg') }}" width="120" height="200"></a>
            </div>
            <div class="col">
                <a href="anime02.php"><img src="images/anime02.jpg" width="120" height="200"></a>
            </div>
            <div class="col">
                <a href="anime03.php"><img src="images/anime03.jpg" width="120" height="200"></a>
            </div>
            <div class="col">
                <a href="anime04.php"><img src="images/anime04.jpg" width="120" height="200"></a>
            </div>
        </div>

        <div class="row row-cols-4 bg">
            <div class="col">
                <a href="anime05.php"><img src="images/anime05.jpg" width="120" height="200"></a>
            </div>
            <div class="col">
                <a href="anime09.php"><img src="images/anime06.jpg" width="120" height="200"></a>
            </div>
            <div class="col">
                <a href="anime09.php"><img src="images/anime07.jpg" width="120" height="200"></a>
            </div>
    

</html>
@endsection