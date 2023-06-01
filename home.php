<?php
include_once "php/conn.php";
session_start();


if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
}

if(!isset($_SESSION['email'])){
  header('location:login.php');
}

?>
<link rel="stylesheet" href="css/style.css">
<br>
<h1 class="text-center">contrôle administrateu</h1>
<a href="logout.php" class="btn btn-danger float-right">Déconnecter</a>

<h3 class="text-danger">messages contactez-nous</h3>
<table class="table table-dark">
  <thead>
    <tr>
 
      <th scope="col" class="text-success">Nom et Surnom</th>
      <th scope="col" class="text-success">Email</th>
      <th scope="col" class="text-success">Numero</th>
      <th scope="col" class="text-success">Details</th>
    </tr>
  </thead>
  <tbody>
  <?php include_once "php/conn.php";
    if($email == 'admin@gmail.com'){
      $select = mysqli_query($conn,"SELECT * FROM contact");
    }else{
      $select = mysqli_query($conn,"SELECT * FROM contact WHERE email = '$email'");
    }

  foreach ($select as $row){ ?>
    <tr>
      <th scope="row"><?= $row['nome']; ?></th>
      <td><?= $row['email']; ?></td>
      <td><?= $row['numero']; ?></td>
      <td>@<?= $row['details']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>



<h3 class="text-danger">Voitures Achetées</h3>
<table class="table table-dark">
  <thead>
    <tr>
    <th scope="col" class="text-success">Nom de la voiture</th>
    <th scope="col" class="text-success">Prix de la voiture</th>
      <th scope="col" class="text-success">Email</th>
      <th scope="col" class="text-success">Mote de passe</th>
      <th scope="col" class="text-success">Payer par</th>
    
    </tr>
  </thead>
  <tbody>
  <?php include_once "php/conn.php";
  if($email == 'admin@gmail.com'){
    $select = mysqli_query($conn,"SELECT * FROM vente");
  }else{
    $select = mysqli_query($conn,"SELECT * FROM vente WHERE email != 'admin@gmail.com'");
  }
  
  foreach ($select as $row){ ?>
    <tr>
      <td scope="row"><?= $row['nom_de_la_voiture']; ?></td>
      <td><?= $row['prix']; ?></td>
      <td ><?= $row['email']; ?></td>
      <td><?= $row['password']; ?></td>
      <td><?= $row['payer_par']; ?></td>

    </tr>
<?php } ?>
  </tbody>
</table>
  <?php ?> 