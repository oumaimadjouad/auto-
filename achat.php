<?php
include_once "php/conn.php";?>
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
    <a class="py-2 d-none d-md-inline-block" href="contact.php">Contactez-nous</a>
    <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
      <input class="form-control mr-sm-2" name="input" id="livesearch" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success name='search'  my-2 my-sm-0" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
    </form>
  </div>
</nav>
<?php


?>


    </div> 

<div class="position-relative overflow-hidden text-center bg-light body">
  <div class="col-md-5 p-lg-5 mx-auto my-5 bg-dark text-light rounded ">
    <b class="text-info">Achetez une voiture neuve-occasion n'a jamais été si facile</b> <br> <br>
    <form method="POST" action="">

      <div class="form-inline ">
    
      <span class="text-danger">*</span>
      <select name="mark" class="custom-select w-100" id="inputGroupSelect01">
        <option selected value="">Marque</option>
        <option value="audi">Audi</option>
        <option value="mercedes">Mercedes</option>
        <option value="bmw">Bmw</option>
        <option value="volkswagen">Volkswagen</option>
        <option value="toyota">Toyota</option>
        <option value="seat">Seat</option>
        <option value="hyundai">Hyundai</option>
        <option value="fiat">Fiat</option>
      </select>


      <span class="text-danger">*</span>
      <select name="year" class="custom-select w-100 mb-lg-4" id="inputGroupSelect01">
        <option selected value="">Année</option>
        <option value="2023">2023</option>
        <option value="2022">2022</option>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
      </select>

      
      <span class="text-danger">*</span>
      <select name="price" class="custom-select w-100 mb-lg-4" id="inputGroupSelect01">
        <option selected value="">Prix Max</option>
        <option value="100">100.000.00 Da</option>
        <option value="200">200.000.00 Da</option>
        <option value="300">300.000.00 Da</option>
        <option value="400">400.000.00 Da</option>
        <option value="500">500.000.00 Da</option>
        <option value="600">600.000.00 Da</option>
        <option value="700">700.000.00 Da</option>
        <option value="800">800.000.00 Da</option>
        <option value="900">900.000.00 Da</option>

      </select>
     


    </div>
    <br>
      <button type="submit" class="btn btn-success" name="submit">Afficher</button>
      <!-- <a href="more.php">Recherche détaillée</a> -->

      <br><br><a href="all.php">Toutes les voitures</a>

   
    </form>
  </div>

   <img src="images/cover car.png" class="img-fluid" alt="image cars" width="500">

 

</div>
<?php if(isset($error)):?>
<div class="alert alert-danger">
  <?php 
{echo $error;} endif?>

<!-- display search result -->
<?php

if(isset($_POST['submit'])){

  if(isset($_POST['mark'])){
    $mark = clear($_POST['mark']);
  }
  if(isset($_POST['price'])){
    $price = clear($_POST['price']);
  }
  if(isset($_POST['year'])){
    $year = clear($_POST['year']);
  }

  if(isset($_POST['year']) && isset($_POST['mark'])){
    $select = mysqli_query($conn,"SELECT * FROM cars WHERE year = '$year' AND mark = '$mark' AND price <= '$price'");

    if(mysqli_num_rows($select) < 1){
      echo   "<div class='alert alert-danger'>Aucun résultat</div>";

    }
  }

  if(mysqli_num_rows($select) < 1){
    $error =  "Aucun résultat";
  }else{

  


  

?>


</div> 

<div class="row row-cols-1 row-cols-md-5 form-inline">
  <?php foreach ($select as $row){ ?>
  <div class="col mb-3">
    <div class="card h-50">
      <center>
      <img src="images/<?= $row['image'] ?>" class="card-img-top w-100" >
      <div class="card-body">
        <h5 class="card-title"><?= $row['name'] ?></h5>
        <b class="text-muted"><?= $row['km'] ?></b> <br>
        <b class="text-muted">Annee <?= $row['year'] ?></b> <br>
        

        <br>
        <button type="button" class="btn btn-success">
  Prix <span class="badge badge-light"><?= $row['price'];?> Da</span>
  <span class="sr-only">unread messages</span>
 
</button>
<br> <br>
<a href="pay.php?id=<?= $row['id'];?>">
          <button class="btn btn-primary">Acheter maintenant</button>
          </a>
        </center>
      </div>
    </div>
    <?php } }
    }
    
    
    ?>
  </div>
</div>








  </body>
</html>

