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
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>  
  <h2 class="titre">Quel est votre besoin ?</h2>
        <div>
        <h4>Detail de votre projet</h4>
        </div>

    <div class="carro">
        <p id="text">Nous cherchons un freelance pour ...</p>
        <p id="text">Notre besoin porte principale sur...</p>
        <p id="text">Les compétence nécessaire sont... </p>
        <p id="text">Notre projet doit être terminées avant le... </p>
    </div>
    <div class="carr">
       <img  class="vector" style="width: 50px;height: 50px;"src="{{asset('asset/img/Vector.png')}}" alt="">
        <p class="msg">Recever au moins 12 devis en détaillant votre projet</p>
    </div>
    <div class="footer">
        <div class="foot">
            <a href="">Retour</a>
       <button class="bg-primary"> Continuer </button>
        </div>
    </div>
</body>
</html>