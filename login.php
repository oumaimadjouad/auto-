<?php
include_once "php/conn.php";
session_start();


if(isset($_POST['submit'])){
    


    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    $select = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    
    if(mysqli_fetch_row($select) > 0){
      $_SESSION['email'] = $email;
      header('location:home.php');
    }else{
      $error = "Mot de passe d'erreur";

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
    <title>AUTO DZ | Connexion</title>
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
  </head>
  
  
  <form class="form-signin" method="POST" action="">
  <?php if(isset($error)):?>
<div class="alert alert-danger">
<?php 
{echo $error;} endif ; ?>
</div>
  <br> 
  <div class="text-center mb-4">

    <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
    
  </div>

  <div class="form-label-group">
    <input type="text" id="inputEmail" name="email"  value="" class="form-control" placeholder="Email" required autofocus>
    <label for="inputEmail">Email</label>
  </div>


  <div class="form-label-group">
    <input type="password" id="password" name="password" value="" class="form-control" placeholder="Mote de pass" required autofocus>
    <label for="inputEmail">Mote de pass</label>
  </div>


 <a href="#">oublier mote de pass?</a>
 <br>
  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Se Connecter</button>
 
  <br>

  <p>OU</p>
  <a href="signup.php">Créer un compte</a>


</form>

<?php 

?>