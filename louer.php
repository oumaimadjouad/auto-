<?php
include_once "php/conn.php";
$select = mysqli_query($conn,"SELECT * FROM cars");
  

?>
<link href="css/style.css" rel="stylesheet">

<script src="js/jQuery.js"></script>

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
<nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="index.php" aria-label="Product">
     <b> AUTO DZ</b>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="contact.php">Contactez-nous</a>
  
  </div>


</nav>


  <center>

  <br>
<form method="get" action="">
<input class="form-control w-25" id="day" type="number" name="day" placeholder="jour?">


    <br>
  </center>
    <link href="css/index.css" rel="stylesheet">
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
        
        <input type="hidden" name="id" id="id" value="<?= $row['id'] ?>">

        <br>
    
        
      
       
        <button type="submit" class="btn btn-success" name="submit">
            
        
  Prix <span class="badge badge-light"><?= $row['louer'];?> Da / jour</span>
 
  <span class="sr-only">unread messages</span>


</button>
<br> <br>
<button class="btn btn-danger" id="louer">Louer maintenant</button>
  </form>

  
  
  
</center>
</div>
</div>
<script>


$("#louer").click(function(){
let day = $("#day").val().trim();
let id = $("#id").val().trim();
if(day == ""){
  day = 1;
}
var dir = "louer_action.php?id="+id+"&day="+day;
window.location.href =dir;

})
</script>
<?php } ; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  </div>
</div>
</div>

      

