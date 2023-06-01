<?php

include_once "php/conn.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Achetez votre nouvelle voiture</title>

    <!-- Bootstrap core CSS -->
<link href="css/style.css" rel="stylesheet">



    <style>
        body {
            background-image: url(images/cover.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">
  </head>
  <body>
  <nav class="site-header sticky-top py-1">
   

   <div class="container d-flex flex-column flex-md-row justify-content-between">
     <a class="py-2" href="index.php" aria-label="Product">
      <b> AUTO DZ</b>
     </a>
     <a class="py-2 d-none d-md-inline-block" href="login.php">Connexion</a>
     <a class="py-2 d-none d-md-inline-block" href="signup.php">Créer un compte</a>
     <a href="promo.php" class="py-2 d-none d-md-inline-block">Promotion et Remises</a>
     <a class="py-2 d-none d-md-inline-block" href="contact.php">Contactez-nous</a>
     <a class="py-2 d-none d-md-inline-block" href="about.php">A propos de nous</a>
   </div>
 </nav>

  <div style="margin-top: 20%;">
 <center>
 <a href="louer.php">
<button type="button" class="btn btn-danger btn-lg">Louer une voiture</button>
</a>

<a href="achat.php">
<button type="button" class="btn btn-success btn-lg">Achat de voiture</button>
</a>
</center>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>




 
      <main role="main" style="margin-top:18rem">

<section class="jumbotron text-center">
  <div class="container">
    <h1>Best-seller</h1>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="img-fluid" src="images/Mercedes-Benz AMG G63.jpg" alt="">

          <div class="card-body">
          <h3>Mercedes-Benz</h3>              
          <div class="d-flex justify-content-between align-items-center">

              <small class="text-muted">30 fois</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">

        <img class="img-fluid" src="images/Mercedes g class.jpg" alt="">
          <div class="card-body">
          <h3>Mercedes G class</h3>
          <div class="d-flex justify-content-between align-items-center">

              <small class="text-muted">150 fois</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">

        <img class="img-fluid" src="images/Mercedes amg.jpg" alt="">
          <div class="card-body">
            <h3>Audi Q3 2023</h3>
            <div class="d-flex justify-content-between align-items-center">

              <small class="text-muted">17 fois</small>
            </div>
          </div>
        </div>
      </div>

    
    

     
    
    
      </div>
    </div>
  </div>
</div>


  
<div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters  overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-dark h1">Le service après-vente GÉRARD</strong>
  
          <p class="card-text mb-auto bold">Nos ateliers spécialisés sont à votre disposition pour répondre à tous vos besoins d’entretien automobile. Nous continuerons à utiliser notre savoir faire pour que votre voiture reste un véhicule de qualité supérieure.</p>
          
          <br>
          <button type="button" class="btn btn-warning" onclick="Show()">EN SAVOIR PLUS</button>

          <style>
           
            #show{
              display: none;
            }
          </style>
          <script>
            function Show(){
          const show =document.getElementById('show');

        if(show.style.display === "none"){

          show.style.display = "block";
             }else{
              show.style.display = "none"; 
    
             }   
}


          </script>
        </div>
        <div class="col-auto d-none d-lg-block">

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters   overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
        <div class="col-auto d-none d-lg-block">
         <img class="img-fluid" src="images/after.jpg" alt="">
        </div>
      </div>
    </div>
  </div>


  <div class="album py-5 bg-light" id="show">
  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="img-fluid" src="images/1.jpg" alt="">

          <div class="card-body">
                  
          <div class="d-flex justify-content-between align-items-center">

          <button type="button" class="btn btn-warning">DEVIS ATELIER EN LIGNE</button>
     
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">

        <img class="img-fluid" src="images/2.jpg" alt="">
          <div class="card-body">
  
          <div class="d-flex justify-content-between align-items-center">

          <button type="button" class="btn btn-warning">DÉCLARER UN SINISTRE</button>
     
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
        <img class="img-fluid" src="images/3.jpg" alt="">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
            <button type="button" class="btn btn-warning">RDV ATELIER EN LIGNE</button> 
            </div>
          </div>
        </div>
      </div>


    


</main>
<div class="container" >
  

<div class="text-center mb-4">

<h1 class="h3 mb-3 font-weight-normal">Service après vente</h1> <b class="text-info">AUTO DZ</b>

</div>

<div class="form-label-group">
  <label for="inputEmail">Nom et surnom</label>
<input type="text" id="inputEmail" name="nom"  class="form-control w-50" placeholder="Nom et surnom" required >
</div>


<div class="form-label-group">
  <label for="inputEmail">Email address</label>
<input type="email" id="inputEmail" name="email" class="form-control w-50" placeholder="Email address" required >
</div>


<div class="form-label-group">
  <label for="inputEmail">Numéro de téléphone</label>
<input type="number" id="inputEmail" name="numero" class="form-control w-50" placeholder="Numéro de téléphone" required >
</div>

<br>
<div class="form-group">

<textarea class="form-control w-50" name="details" id="exampleFormControlTextarea1" rows="3" placeholder="Détails"></textarea>
</div>


<button class="btn btn-lg btn-primary" name="submit" type="submit">Envoyer</button>

<a href="index.php">Annuler</a>
</form>
</div>
  </body>
</html>
