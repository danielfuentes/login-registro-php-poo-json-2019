<?php
require_once("loader.php");
if(!isset($_SESSION["email"])) {
    redirect("register.php");
}
?>
<html>
  <head>
    <title>perfil del Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/index.css">    
    <meta charset="utf-8">
  </head>
  <body>
    <div class="container-fluid">
      <?php include_once('partials/header.php');?> 
      <div id="formContainer" class="row align-items-center">
        <div class="col-sm-6 offset-md-3 text-center">
          <h1 class="text-center ">Bienvenido  <br><?=$_SESSION['nombre'] ;?></h1>
          <p>
            <img class="rounded-circle w-50" src="imagenes/<?=$_SESSION['avatar'];?>" alt="Avatar">
          </p>  
          <p>
            <a download href="imagenes/<?=$_SESSION['avatar'];?>">Descargar la imagen</a>
          </p>
        </div>
      </div>
      <?php include_once('partials/footer.php');?> 

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
    </script>
  </body>
</html>
