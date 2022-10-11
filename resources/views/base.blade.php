<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/error.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <title>JOKKALANTE</title>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-dark bg-primary p-4">
        <a class="navbar-brand m-3" href="#"><img src="{{asset('asset/img/Jokkolanté White.png')}}" alt=""></a>
        <div class="btn-group">
            <button class="btn-menu text-uppercase px-3 mr-6" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa-solid fa-bars text-primary m-1 p-1" style="font-size:35px;"></i>   
                <i class="fas fa-user-circle text-primary m-1 p-1" style="font-size:35px;"></i>
            </button>
            <div class="dropdown-menu bg-gray ml-n4 mr-6 mt-2">
                <a class="dropdown-item text-primary" href="#"><b>Connexion</b> </a>
                <a class="dropdown-item text-primary" href="#"> <b>Inscription </b> </a>
                <div class="dropdown-divider text-primary"></div>
                <a class="dropdown-item text-primary" href="#">Trouver Des Freelances</a>
                <a class="dropdown-item text-primary" href="#">Trouver Des Clients</a>
                <a class="dropdown-item text-primary " href="#">Aide</a>
            </div>
        </div>
    </nav>
    <div class="row text-left">
        <div class="col-md-3 text-right">
            <div class="collapse text-right" id="navbarToggleExternalContent">
                <div class="bg-primary p-3 bg-light text-primary ">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    @yield('content')

    <!-- Footer Start py-5 px-sm-3-->
    <div class="container-fluid bg-dark ">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a class="navbar-brand m-3" href="#"><img src="{{asset('asset/img/Jokkolanté White.png')}}" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Liens utiles</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"></i> Aide et FAQ</a>
                    <a class="text-white mb-2" href="#"></i>Nos tarifs</a>
                    <a class="text-white mb-2" href="#"></i>Comment ça marche ?</a>
                    <a class="text-white mb-2" href="#"></i>Conditions d'utilisation</a>
                    <a class="text-white mb-2" href="#"></i>Politique de confidentialité </a>
                    <a class="text-white" href="#"></i>Mentions légales </a>
                    <a class="text-white" href="#"></i>Les pages </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-dark mb-4">;</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"></i> Freelances par catégorie</a>
                    <a class="text-white mb-2" href="#"></i>Freelances par ville</a>
                    <a class="text-white mb-2" href="#"></i>Projets par catégorie</a>
                    <a class="text-white mb-2" href="#"></i>Les avis Jokkolante.com</a>
                    <a class="text-white mb-2" href="#"></i>À propos de nous</a>
                    <a class="text-white mb-2" href="#"></i>Partenaires</a>
                    <a class="text-white mb-2" href="#"></i>Nous contacter</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Contact</h4>
                <p class="text-white  mb-2"></i>(+221) 78 539 82 55</p>
                <div class="row ">
                    <div class="col-lg-12 col-md-6 mb-2 ">
                    <a class="text-white  px-2" href=""><i class="fa-brands fa-facebook " style="font-size:30px;"></i></a>
                    <a class="text-white  px-2" href=""><i class="fa-brands fa-twitter" style="font-size:30px;"></i></a>                                                                                           
                    </div>
                    <div class="col-lg-12 col-md-6 mb-2 ">
                    <a class="text-white  px-2" href=""><i class="fa-brands fa-instagram" style="font-size:30px;"></i></a>                   
                    <a class="text-white  px-2" href=""><i class="fa-brands fa-linkedin" style="font-size:30px;"></i></a>                    
                    </div>
                </div>
                <div class="w-100 mb-3">
                    <p class="text-white mb-2">Inscrivez vous à notre Newsletter</p>
                    <div class="input-group">
                        <input type="text" class="form-control bg-gray-dark " style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-signup text-uppercase px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>