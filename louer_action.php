<?php
include_once "php/conn.php";



if(isset($_GET['id'])){
$id = clear($_GET['id']);

if(isset($_POST['day'])){
 
  $day =  $_POST['day']; 
}


$select = mysqli_query($conn,"SELECT * FROM cars WHERE id = '$id'");


foreach ($select as $row){ 

}
?>

    
<form action="" method="post">

  <link href="css/style.css" rel="stylesheet">
  <div class="row row-cols-1 row-cols-md-5 justify-content-xl-around text-info">

    <?php foreach ($select as $row){ ?>
    <div class="card h-50 bg-dark">
      <center>
      <img src="images/<?= $row['image'] ?>" class="card-img-top w-75" >
      <div class="card-body">
        <h5 class="card-title "><?= $row['name'] ?></h5>
        <input type="hidden" name="nom_de_la_voiture" value="<?= $row['name'] ?>">
        <b class="text-light"> <?= $row['km'] ?> </b> <br>
        <b class="text-light">Année <?= $row['year'] ?></b> <br>
        <button type="button" class="btn btn-success">
  Prix <span class="badge badge-light"><?= $row['louer'] * $_GET['day'];?> / <?=  $_GET['day']; ?>jours</span>
  <input type="hidden" name="prix"  value="<?= $row['louer'] * $_GET['day'];?>">

  <span class="sr-only">unread messages</span>
 
</button>
<br> <br>
    
        </center>
      </div>

      
      <?php } }?>
    </div>
  </div>

 

 

 <link rel="stylesheet" href="css/style.css">

 <center>
<br>
 <div>
   <input type="text" name="email" id="email" class="form-control w-25" placeholder="Email">
 </div>
<br>
 <div>
   <input type="password" name="password" id="password" class="form-control w-25" placeholder="Mote de passe">
 </div>
<br>
<select class="form-control w-25" name="payer_par">
       <option selected value="">payer par..</option>
       <option value="CCP">CCP</option>
       <option value="CASH">CASH</option>

     </select> 

     <br>
     <select class="form-control w-25" name="duree">
        <option selected value="">Durée ?</option>
        <option value="courte durée">Location courte durée</option>
        <option value="longue durée">Location longue durée</option>
      </select>
<br>
 <a href="signup.php">Vous n'avez pas de compte?, créer un compte</a>
 <br>



      <br>
 <button class="btn btn-success" name="submit" name="submit">Payez maintenant</button>
 </center>
 </form>
<?php

if(isset($_POST['submit'])){

  

  if(isset($_POST['duree'])){
    $duree = $_POST['duree'];
  }


  if(isset($_POST['email'])){
    $email = $_POST['email'];
  }

  if(isset($_POST['password'])){
    $password = $_POST['password'];
  }

  if(isset($_POST['payer_par'])){
    $payer_par = $_POST['payer_par'];
  }

  if(isset($_POST['nom_de_la_voiture'])){
    $nom_de_la_voiture = $_POST['nom_de_la_voiture'];
  }


  if(isset($_POST['prix'])){
    $prix = $_POST['prix'];
  }



$select = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1");

if(mysqli_fetch_row($select) > 0){
  $_SESSION['email'] = $email;
  mysqli_query($conn,"INSERT INTO `vente`( `email`,`nom_de_la_voiture`, `prix`, `password`, `payer_par`,`duree`) 
  VALUES ('$email','$nom_de_la_voiture','$prix','$password','$payer_par','$duree')");
  echo '<script>alert("Une demande a été soumise");</script>';
  header('location:louer.php');

}else{
  echo '<script>alert("Vous n\'avez pas de compte, ouvrez un compte et effectuez le paiement");</script>';

}


  
 





}


?>

