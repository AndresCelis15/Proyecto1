<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>header</title>
  <link rel="stylesheet" href="http://localhost/proyecto/CSS/estilos.css">

  <div class="menu">
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <img src="img/fondo.jpg" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>index.php/Inicio/home"><img src="http://localhost/proyecto/img/logo.png" width="60" alt=""></a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              MARCAS
            </a>
            <ul class="dropdown-menu p-0 border-white" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item text-white" href="<?php echo base_url();?>index.php/Usuarios/audi">AUDI</a></li>
              <li><a class="dropdown-item text-white" href="<?php echo base_url();?>index.php/Usuarios/ford">FORD</a></li>
              <li><a class="dropdown-item text-white" href="<?php echo base_url();?>index.php/Usuarios/bmw">BMW</a></li>
              <li><a class="dropdown-item text-white" href="<?php echo base_url();?>index.php/Usuarios/mercedes">mercedes</a></li>
            </ul>

          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo base_url();?>index.php/usuarios/cotizar">Cotizar</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo base_url();?>index.php/usuarios/noticias">Noticias</a>
          </li>



            <li class="nav-item dropdown" id="derecha">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Contáctanos
            </a>
            <ul class="dropdown-menu p-0 border-white" aria-labelledby="navbarDropdownMenuLink">
              <li><p id="contac" href="<?php echo base_url();?>index.php/Usuarios/consultar_usuarios">Estiven Leonardo Cordero Gonzales <br> 3222427026 - 3123522892 <br> Calle 16 #2-56 Neiva, Huila.</p> <img src="http://localhost/proyecto/img/contacto.jpg" width="200" alt=""></li>
            </ul>
      </div>
    </div>
</nav>

</head>
<body>
