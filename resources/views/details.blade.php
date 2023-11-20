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

<body class="p-3 bg text-black">
    <h1>One Piece</h1></br>

    <div class="container">
        <div class="row row-cols bg">
            <div class="col">
                <img src="{{ asset('images/anime01.jpg') }}" width="500" height="500"></a>
            </div>
            <div class="col">
                <p>One Piece est une série d'anime adaptée du manga homonyme créé et illustré par Eiichirō Oda. La série suit les aventures de Monkey D. Luffy, un jeune garçon accompagné de son fidèle équipage nommé l'« Équipage de Chapeau de paille ». Le rêve de Luffy est de devenir le prochain Roi des Pirates.</p>
            </div>
        </div>
    </br>
    <a href="{{ route('welcome') }}">Mes Animes</a>
    </div>
</body>
</html>