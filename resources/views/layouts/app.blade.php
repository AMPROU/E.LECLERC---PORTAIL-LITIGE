<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BTLEC OUEST</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/E.leclerc.ico') }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
<!-- Responsive navbar-->

<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

          <p class="mb-1 h-1"><img src="{{ asset('img/LOGO_BTLECOUEST.png') }}"></p>


        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/home" class="nav-link px-2 link-dark">Accueil</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">informations</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Nouvelle demande</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Contact</a></li>
        </ul>

 

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{Auth::user()->avatar}}"alt="mdo" width="32" height="32" class="rounded-circle"> {{Auth::user()->name}} : {{$magasin->nom_magasin}}
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">Mon compte</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="exit">Deconnexion</a></li>
          </ul>
        </div>
      </div>
    </div>
    
  </header>

  


  <div class="container">
@yield('content')
</div>


<!-- Footer-->
<footer class="py-1 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; BTLEC OUEST 2023</p></div>
</footer>

<!-- Bootstrap core JS

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<!-- Core theme JS-->
<!-- <script src="{{ asset('js/scripts.js') }}"></script> -->
@stack('js')


</body>
</html>