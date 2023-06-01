<?php
include_once "php/conn.php";
 


if(isset($_POST['input'])){
$input = clear($_POST['input']);
$select = mysqli_query($conn,"SELECT * FROM cars WHERE (name LIKE '%$input%' OR km LIKE '%$input%' OR year LIKE '%$input%')");




if(mysqli_num_rows($select) < 1){
  $error =  "Aucun résultat";
}
  
   
?>
<link href="css/style.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">

<?php if(isset($error)):?>
<div class="alert alert-danger">
  <?php 
{echo $error;} endif?>
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
    <?php } }?>
  </div>
</div>


<a href="achat.php" style="margin-left:40px">
  <button type="button" class="btn btn-warning">Retour</button>
</a>

