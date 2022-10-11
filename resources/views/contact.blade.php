@extends('base')
@section('content')

<div class="container-fluid boxpente bg-primary mt-n3 py-2">
    <div class="container boxdepente py-1">
        <div class="row mx-4">
            <div class="col-lg-6 col-md-6 mb-2 pt-3 px-lg-5">
                <h1 class="text-uppercase text-white text-light mb-4 py-2">Contact</h1>
                <p class="text-white mb-4 py-4"> Prêt à passer au stade supérieur et à travailler <br> ensemble?</p>
            </div>
            <div class="col-lg-6 col-md-6 px-lg-5">
                <img class="img-fluid " src="asset/img/lf20_defysxr4.json].jpg" alt="">
            </div>
        </div>
    </div>
</div>
 <div class="container-fluid" id="contact"> 
        <div class="row">
            <form  class="col-6">
                    <h1 class=" title"> Contacter nous </h1>
                    <p style="    padding: 17px 10px;font-size: small;width: 417px; color:black;"> Prét à passer au state supérieure et à travailler ensemble </p>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group" >
                <textarea class="form-control" aria-label="With textarea" placeholder="Message" style="height: 120px;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" id="boton">Envoyer</button>
        </form>
    <div class="col-6"id="infocontact" >
            <h3 id="litletitre">Adresse</h3>
            <p> Keur Massar,Dakar,Sénégal </p>
            <h3  id="litletitre">Temps de réponse </h3>
            <p> Entre Lundi et Vendredi</p>
            <h3  id="litletitre">Email</h3>
            <p> contact@Jokkalanté.com</p>
            <h3  id="litletitre">Numéro de téléphone</h3>
            <p> 78 132 01 05 </p>
        </div>
            </div>
    </div> 
    <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=bargny&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><a href="https://www.embedgooglemap.net">google html code</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1080px;}</style></div></div>       
    


@endsection