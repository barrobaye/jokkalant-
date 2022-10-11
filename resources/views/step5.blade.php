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
  <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
</div>  
  <h2 class="titre">Quels est votre budget ?</h2>
        <div>
        <h4>Budget approximatif </h4>
        </div>
    <div class="budget">
        <p class="pay"> Moins de 350.000 Franc CFA </p>
    </div>
    <div class="budget">
        <p class="pay"> 350.000 à 650.000 Franc CFA </p>
    </div>
    <div class="budget">
        <p class="pay"> 650.000 à 6.250.000 Franc CFA </p>
    </div>
    <div class="budget">
        <p class="pay">6.250.000 Franc CFA</p>
    </div>
    <div class="car">
       <img  class="vecto" style="width: 50px;height: 50px;"src="{{asset('asset/img/Vectorer.png')}}" alt="">
        <p class="ms">99% des clients trouvent des freelance dans leur budget</p>
    </div>
    <div class="footer">
        <div class="foot">
            <a href="">Retour</a>
       <button class="bg-primary"> Continuer </button>
        </div>
    </div>
</body>
</html>