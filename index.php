<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link href=“https://fonts.googleapis.com/css?family=Raleway:300,400,500,700” rel=“stylesheet”>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Programación estructurada con PHP</title>
  </head>
  <body>
    <div class="container-fluid">
        <!--Aquí estoy incorporando PHP en mi HTML, el cual es la barra de navegación-->
        <?php include_once('partials/header.php');?>    
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/banner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner4.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
      <hr>
      
      <main>
        <h2 class="__peliculasdeldia" id="estrenos">Películas en estreno</h2>

        <div class="__peliculas row">
          <div class="d-flex card col-12 col-md-4 col-lg-3 __itempelicula" style="width: 18rem;">

            <img src="img/pelicula1.jpg" class="card-img-top __imgpelicula" alt="...">
            <div class="card-body">
              <p class="card-text __textopelicula">Atrapados</p>
              <a href="#" class="d-flex btn btn-primary __comprar">Ver detalle</a>
            </div>
          </div>
            <div class="card col-12 col-md-4 col-lg-3 __itempelicula" style="width: 18rem;">
              <img src="img/pelicula10.jpg" class="card-img-top __imgpelicula" alt="...">
              <div class="card-body">
                <p class="card-text __textopelicula">HumanPersons</p>
                <a href="#" class="d-flex btn btn-primary __comprar">Ver detalle</a>
              </div>
            </div>
            <div class="card col-12 col-md-4 col-lg-3 __itempelicula" style="width: 18rem;">
              <img src="img/pelicula3.jpg" class="card-img-top __imgpelicula" alt="...">
              <div class="card-body">
                <p class="card-text __textopelicula">Toy story 4</p>
                <a href="#" class="d-flex btn btn-primary __comprar" >Ver detalle</a>
              </div>
            </div>
            <div class="d-flex card col-12 col-md-4 col-lg-3 __itempelicula" style="width: 18rem;">
              <img src="img/pelicula4.jpg" class="card-img-top __imgpelicula" alt="...">
              <div class="card-body">
                <p class="card-text __textopelicula">Guasón</p>
                <a href="#" class="d-flex btn btn-primary __comprar">Ver detalle</a>
              </div>
            </div>
              <div class="card col-12 col-md-4 col-lg-3 __itempelicula" style="width: 18rem;">
                <img src="img/pelicula8.jpg" class="card-img-top __imgpelicula" alt="...">
                <div class="card-body">
                  <p class="card-text __textopelicula">Midway</p>
                  <a href="#" class="d-flex btn btn-primary __comprar">Ver detalle</a>
                </div>
              </div>
              <div class="card col-12 col-md-4 col-lg-3 __itempelicula" style="width: 18rem;">
                <img src="img/pelicula7.jpg" class="card-img-top __imgpelicula" alt="...">
                <div class="card-body">
                  <p class="card-text __textopelicula">La noche de las dos lunas</p>
                  <a href="#" class="d-flex btn btn-primary __comprar" >Ver detalle</a>
                </div>
              </div>
        </div>
      </main>
        <!--Aquí estoy incorporando PHP en mi HTML, el cual es el footer-->
        <?php include_once('partials/footer.php');?>    

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
