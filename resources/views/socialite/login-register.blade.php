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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	    <!-- Custom theme CSS )-->
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet" />
</head>


<body>
	<div class="container">
        <div class="body d-md-flex align-items-center justify-content-between">

            <div class="box-1 mt-md-3 mt-5">
                <img src="{{ asset('img/BTLECOUEST_EXT.jpg') }}"
                    class="" alt="">
            </div>

			
            <div class=" box-2 d-flex flex-column h-100">
                <div class="mt-5">
                       <!-- Image Gauche )-->
                    <p class="mb-1 h-1"><img src="{{ asset('img/LOGO_BTLECOUEST.png') }}"></p>
                   

                    <!-- Contenu droite )-->
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('socialite.redirect', 'google') }}" class="box me-2 ">
                        <p class="mb-2"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Connexion Google</p>
                        </a>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="{{ route('socialite.redirect', 'google') }}" class="box me-2 ">
                        <p class="mb-2"><img src="{{ asset('img/contact.png') }}" height="21"> Un problème Contacter nous.</p>
                        </a>
                    </div>
         
             


                </div>
            </div>
        </div>
    </div>



<!-- Footer-->
<footer class="py-1 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; BTLEC OUEST 2023</p></div>
</footer>

<!-- Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS-->
<script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>


