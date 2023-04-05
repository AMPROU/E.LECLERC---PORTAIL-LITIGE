<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BTLEC OUEST</title>
    <!-- FAVICON-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/E.leclerc.ico') }}" />
    <!-- FAVICON-->
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
     <!-- BOOTSTRAP -->
    <!-- MDB -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"  rel="stylesheet"/>
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"  rel="stylesheet"/>
    <!-- MDB -->
    <!-- CUSTOM CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <!-- CUSTOM CSS -->
</head>

<body>
<!-- Responsive navbar-->

<header class="p-3 mb-3 border-bottom">
    <div class="container">
   <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><img src="{{ asset('img/LOGO_BTLECOUEST.png') }}"></a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars text-light"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link active" aria-current="page" href="#!">
            <div>
              <i class="fas fa-home fa-lg mb-1"></i>
            </div>
            Home
          </a>
        </li>

 <!-- MENU GAUCHE -->
 <!-- MENU MAGASIN -->
        <li class="nav-item dropdown text-center mx-2 mx-lg-1">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
            aria-expanded="false">
            <div>
              <i class="fas fa-cart-shopping fa-lg mb-1"></i>
              <span class="badge rounded-pill badge-notification bg-primary"></span>
            </div>
            MAGASIN
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Mon Magasin</a></li>
            <li><a class="dropdown-item" href="#">Annuaire</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="#">ADMINISTRATION</a>
            </li>
          </ul>
        </li>
  <!-- MENU MAGASIN -->       
      </ul>
  <!-- MENU GAUCHE -->

  <!-- MENU DROITE -->
      <ul class="navbar-nav  ms-auto d-flex flex-row mt-3 mt-lg-0">
      <li class="nav-item dropdown text-center mx-2 mx-lg-1">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
            aria-expanded="false">
            <div>
            <img src="{{Auth::user()->avatar}}"alt="mdo" width="32" height="32" class="rounded-circle">
              <span class="badge rounded-pill badge-notification bg-primary"></span>
            </div>
            {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/compte/voir') }}">Mon Compte</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="#">ADMINISTRATION</a>
            </li>
          </ul>
        </li>       
      </ul>
<!-- MENU DROITE -->
    </div>
  </div>
</nav>
<!-- Navbar -->
      </div>
</header>


<!-- CONTENU-->
  <div class="container">
@yield('content')
</div>
<!-- CONTENU-->


<!-- FOOTER-->
<footer class="py-1 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; BTLEC OUEST 2023</p></div>
</footer>
<!-- FOOTER-->

<!-- Bootstrap core JS
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script> -->

<!-- MDB JS -->
<script  type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
<!-- MDB JS -->
<!-- SCRIPT JS GLOBAL-->
<script src="{{ asset('js/scripts.js') }}"></script>
<!-- SCRIPT JS GLOBAL-->
<!-- CONTAINER JS PAGE-->
@stack('js')
<!-- CONTAINER JS PAGE-->


</body>
</html>