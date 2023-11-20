<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('modeles.entete')
</head>

<body class="bg">
    
    <main id="main">
    
    <!-- container -->
    
        <div class="container">
            <!-- Content -->
            @yield('content')
        </div>
    </main>
        @include('modeles.pied')
    </section>
</body>

</html>