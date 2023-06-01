<?php
include_once "php/conn.php";


if(isset($_POST['submit'])){

  if(isset($_POST['details'])){
    $details = $_POST['details'];
  }

  if(isset($_POST['nom'])){
    $nom = $_POST['nom'];
  }

  if(isset($_POST['email'])){
    $email = $_POST['email'];
  }

  if(isset($_POST['numero'])){
    $numero = $_POST['numero'];
  }


  $insert = mysqli_query($conn,"INSERT INTO `contact`( `nome`, `email`, `numero`, `details`) VALUES ('$nom','$email','$numero','$details')");
  exit('Votre message a été envoyé et nous vous répondrons dans les plus brefs délais <a href="index.php">RETOUR</a>');
  

}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>AUTO DZ</title>
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">

    <style>
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
    <link href="css/carousel.css" rel="stylesheet">
 



<link rel="stylesheet" href="css/login.css">
<style>
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
  
    
<form class="form-signin" method="POST" action="">
  <br> 
  <div class="text-center mb-4">

    <h1 class="h3 mb-3 font-weight-normal">Service après vente</h1> <b class="text-info">AUTO DZ</b>
    
  </div>

  <div class="form-label-group">
    <input type="text" id="inputEmail" name="nom"  class="form-control" placeholder="Nom et surnom" autofocus required >
    <label for="inputEmail">Nom et surnom</label>
  </div>


  <div class="form-label-group">
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required >
    <label for="inputEmail">Email address</label>
  </div>


  <div class="form-label-group">
    <input type="number" id="inputEmail" name="numero" class="form-control" placeholder="Numéro de téléphone" required >
    <label for="inputEmail">Numéro de téléphone</label>
  </div>

  <div class="form-group">
    
    <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3" placeholder="Détails"></textarea>
  </div>
  

  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Envoyer</button>
 
  <a href="index.php">Annuler</a>
</form>

