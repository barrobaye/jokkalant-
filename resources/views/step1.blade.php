<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/step.css')}}" rel="stylesheet">
    <title></title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img  src="{{asset('asset/img/logo.ico')}}"  width="50" height="50" alt="">
  </a>
  <div class="freelance">
    <p style="color: #009EE2"> 784 freelances actifs </p>
    <p style="color: black" > en ce moment </p> 
  </div>
    <div class="circle">
        <div class="notice">
        </div>
     </div>
     <i class="fa-solid fa-circle-xmark" style= "font-size: x-large;"></i>
</nav>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>  
  <h2>Quel est votre besoin ?</h2>
        <div class="nbrprojet">
        <p> votre proget en quelque mots</p>
        <p> 0/70 </p>
        </div>
        <form class="form">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="password" class="myinput" id="inputPassword2" placeholder="">
  </div>
</form>
    <div class="carré">

    </div>
    <div class="footer">
        <div class="foot">
        <p style="color: #009EE2"> simple,rapide,et gratuit </p>
       <button class="bg-primary"> Continuer </button>
        </div>
    </div>
</body>
</html>