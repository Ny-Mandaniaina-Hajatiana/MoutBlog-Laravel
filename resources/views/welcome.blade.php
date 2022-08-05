<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <!--Lien Bootstrap CSS CDN-->
    <!--Bootstrap CSS-->
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!--Bootstrap Popper-->
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!--Lien Bootstrap CSS CDN-->

    <style>
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding-top: 5rem;
            background: url(../img/hero-bg.jpg) top center;
            background-size: cover;
            position: relative;
  }

    </style>
</head>
<body>

    <div class="container" id="hero">
        <div class="row">
            <div class="col-12 text-center pt-5"><br>
            <br>
            <br>
            <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
            <h2>Bienvenue sur MoutBlog</h2>
            <br>
            <a href="/Index" class="btn-get-started">Afficher Le Blog →</a>
            </div>
        </div>
    </div>
</body>

<!-- Footer -->
<footer class="py-5 bg-dark" style="margin-top:195px;">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright
            © {{setting('site.title')}} <?php echo date("Y"); ?></p>
    </div>
    <!-- /.container -->
</footer>
</html>








