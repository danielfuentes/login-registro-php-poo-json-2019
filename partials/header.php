<?php
  require_once('loader.php');
  require_once('helpers.php');
?>
<nav class="d-flex navbar navbar-expand-lg navbar-dark __nave">
          <div class="d-flex flex-grow-1">
              <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
              <div class="navbar-brand" href="#">
                  <a href="index.php"><img class="__imglogo" src="img/logo_daniel.png" alt="logo del emprendimiento de Daniel"></a> 
              </div>
              <div class="w-100 text-right">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
                      <span class="navbar-toggler-icon"></span>
                  </button>
              </div>
          </div>

          <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
              <ul class="navbar-nav ml-auto flex-nowrap __navbar">
                  <li class="nav-item o_navitem">
                      <a href="#estrenos" class="nav-link">Próximos Estrenos</a>
                  </li>
                  <li class="nav-item o_navitem">
                      <a href="#" class="nav-link">Publicidad  Eventos</a>
                  </li>
                  <!--Esto lo estoy colocando para controlar que debe aparecer en las opciones del navbar, dependiendo si el usuario está logueado o no-->
                  
                  <?php if(!isset($_SESSION["email"])) :?>
                        <li class="nav-item o_navitem">
                            <a href="login.php" class="nav-link">Logín</a>
                        </li>
                        <li class="nav-item o_navitem">
                            <a href="register.php" class="nav-link">Registro</a>
                        </li>
                  <?php else :?>
                    
                        <li class="nav-item o_navitem">
                        <a href="logout.php" class="nav-link">Cerrar Sesión </a>
                      </li>

                  <?php endif;?>    
              </ul>

          </div>
          <div class="d-flex __busqueda">
            <form class="d-flex form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Busca tu pelicula" aria-label="Search">
              <button class="btn btn-dark my-2 my-sm-0 __buscar" type="submit">Buscar</button>
            </form>
            </div>
        </nav>
