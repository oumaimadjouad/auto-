<?php
include_once "php/conn.php";



if(isset($_GET['id'])){
$id = clear($_GET['id']);

$select = mysqli_query($conn,"SELECT * FROM cars WHERE id = '$id'");


foreach ($select as $row){ 

}
?>
 <nav class="site-header sticky-top py-1 bg-dark">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2 text-light" href="index.php" aria-label="Product">
     <b> AUTO DZ</b>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="contact.php">Contactez-nous</a>
  </div>
</nav>
    <br> 
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
  Prix <span class="badge badge-light"><?= $row['price'];?></span>
  <input type="hidden" name="prix" value="<?= $row['price'] ?>">
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
 <a href="signup.php">Vous n'avez pas de compte?, créer un compte</a>
 <br>



      <br>
 <button class="btn btn-success" name="submit">Payez maintenant</button>
 </center>
 </form>
<?php

if(isset($_POST['submit'])){


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
  mysqli_query($conn,"INSERT INTO `vente`( `email`,`nom_de_la_voiture`, `prix`, `password`, `payer_par`) 
  VALUES ('$email','$nom_de_la_voiture','$prix','$password','$payer_par')");
  exit('Une demande a été soumise <a href="index.php">RETOUR</a>');

}else{
  echo '<script>alert("Vous n\'avez pas de compte, ouvrez un compte et effectuez le paiement");</script>';

}


  
 





}


?>

