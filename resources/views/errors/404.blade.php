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
    <title>JOKKALANTE</title>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-dark bg-primary" id="navbar">
        <a class="navbar-brand m-3" href="#"><img src="{{asset('asset/img/Jokkolanté White.png')}}" alt=""></a>
    </nav>
    <!-- Navbar End -->
    @yield('content')
    <div class="uperror">
     <img class="picture"
    src="{{asset('asset/img/404img.jpg')}}"
     alt="">
    </div>
    <div class ="downerror">
        <h2 class="erorr"> Le site est en maintenance </h2>
    </div>

   
    <!-- Footer End -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>