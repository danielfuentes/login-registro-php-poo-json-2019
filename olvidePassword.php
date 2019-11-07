<?php
require_once("loader.php");
if($_POST){
  $usuario = new Usuario($_POST["email"],$_POST["password"],$_POST["passwordRepeat"] );
  $errores= $validar->validacionOlvide($usuario);
  if(count($errores)==0){
    $usuarioEncontrado = $json->buscarPorEmail($usuario->getEmail());
    
    if($usuarioEncontrado == null){
      $errores["email"]="El usuario no existe en nuestra base de datos";
    }else{
        $registro = $json->jsonRegistroOlvide($usuario->getEmail(),$usuario->getPassword());
          redirect("cambioContraseña.php");
    }
  }
}
?>
<html>
  <head>
    <title>Recuperando contraseña</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/master.css">
    <meta charset="utf-8">
  </head>
  <body>
    <div class="container-fluid containerOlvide">
      <?php include_once('partials/header.php');?> 
      <section class="formularioOlvide">
        <div id="formContainer" class="row align-items-center">
          <div class="col-8 offset-2  ">
            <h1>Recuperando contraseña</h1>
            <?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $value) :?>
                    <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
            <?php endif;?> 
            <form id="formularioOlvide"  class="formOlvide" name="formOlvide"     novalidate action=""  method="POST">
                      
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo" value= "<?=isset($errores['email'])? "":old('email') ;?>"
              </div>
          
              <div class="form-group">
                <label for="password">Ingrese una nueva contraseña</label>
                <input required name="password" type="password" value= "" class="form-control" id="password" placeholder="Contraseña">
              
                <small class="form-text text-muted">Al menos 6 caracteres, debe contenter sólo números</small>
              </div>
            
              <div class="form-group">
                <label for="password">Confirmar contraseña</label>
                <input required name="passwordRepeat" type="password" value= ""class="form-control" id="passwordRepeat" placeholder="Confirmar la contraseña">
              </div>
           
              <button type="submit" class="btn btn-primary">Cambiar contraseña</button>

            </form>
        </div> 
      </section>
      <?php include_once('partials/footer.php');?> 
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
  </body>
</html>
