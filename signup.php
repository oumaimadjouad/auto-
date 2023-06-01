<?php
include_once "php/conn.php";



if(isset($_POST['submit'])){
  
  
  if(isset($_POST['nom'])){
    $nom = $_POST['nom'];
  }
  
  if(isset($_POST['prenom'])){
    $prenom = $_POST['prenom'];
  }

  if(isset($_POST['date_de_naissance'])){
    $date_de_naissance = $_POST['date_de_naissance'];
  }


    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    if(isset($_POST['confirm_password'])){
      $confirm_password = $_POST['confirm_password'];
  }

  if($password !== $confirm_password){    // 1 intger number     "1" string
    echo "le mot de passe ne correspond pas";
  }else{
    $select = mysqli_query($conn,"INSERT INTO `users`( `nom`, `prenom`, `date_de_naissance`, `email`, `password`) 
    VALUES ('$nom','$prenom','$date_de_naissance','$email','$password')");
    header('location:login.php');
    die();
  }




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
    <title>AUTO DZ | Créer un compte</title>
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
  <?php if(isset($error)):?>
<div class="alert alert-danger">
<?php 
{echo $error;} endif ; ?>
</div>
  <br> 
  <div class="text-center mb-4">

    <h1 class="h3 mb-3 font-weight-normal">Créer un compte</h1>
    
  </div>

  <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Nom et prénom</span>
  </div>
  <input type="text" name="nom" aria-label="nom" autofocus class="form-control">
  <input type="text" name="prenom" aria-label="prenom" class="form-control">
</div>

<br>


  <div class="form-label-group">
    <input type="text" id="inputEmail" name="email"  value="" class="form-control" placeholder="Email" required >
    <label for="inputEmail">Email</label>
  </div>

  <div class="form-label-group">
    <input type="date" id="date de naissance" name="date_de_naissance"  value="" class="form-control" placeholder="Email" required >
    <label for="date de naissance">date de naissance</label>
  </div>


  <div class="form-label-group">
    <input type="password" id="password" name="password" value="" class="form-control" placeholder="Mote de pass" required >
    <label for="inputEmail">Mote de passe</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password" name="confirm_password" value="" class="form-control" placeholder="Mote de pass" required >
    <label for="inputEmail">Confirmer votre mote de passe</label>
  </div>


 

  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Créer un account</button>
 
  <br>

  <p>OU</p>
  <a href="login.php">Connexion</a>


</form>

