<?php
include_once "php/conn.php";
    $select = mysqli_query($conn,"SELECT * FROM cars");
  
?>
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

    <link href="css/index.css" rel="stylesheet">

    <nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="index.php" aria-label="Product">
     <b> AUTO DZ</b>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="contact.php">Contactez-nous</a>
   
  </div>


</nav>
<br>
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

        
          <?php if($row['disponible'] == 1) {
        echo '<button type="button" class="btn btn-danger">Non disponible</button></div></div></div>';
        }else{?>
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
    <?php } 
    
      }
    
    ?>
  </div>
</div>
</div>