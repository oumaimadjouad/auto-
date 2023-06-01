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
  </div>
</nav>

<div class="position overflow-hidden text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5 bg-dark text-light rounded">
    <b class="text-info">Recherche plus détaillée</b> <br> <br>
    <form method="POST" action="">
      <div class="form-inline ">
        <form class="form-inline my-2 my-lg-0">
         <input class="form-control w-100"  type="search" id="livesearch" name="input" placeholder="Search" autofocus aria-label="Search">
            <br><br>
            <i class="text-success">Vous pouvez rechercher par Marque, Année ou Prix.</i>
           
          </form>
         
</div>
</div>
</div>
<div id="output"></div>
<script src="js/jQuery.js"></script>
<script>
    $(document).ready(function(){
        $('#livesearch').keyup(function(){
            let input = $(this).val();
            if(input != ""){
                $.ajax({
                    url:"search.php",
                    method:"POST",
                    data:{input:input},
                    success:function(date){
                        $("#output").html(date);
                        $("#output").css("display","block");
                    }
                });
            }    
        })
    });
</script>

  </body>
</html>



