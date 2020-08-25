<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

  <!-- FontAwsome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto&display=swap" rel="stylesheet">

  <!-- B4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- css Folder-->
  <link rel="stylesheet" href="styles/styles.css">

  <title> Simple y Creativo</title>


</head>

<body>
  <div class="cover-container d-flex flex-column ">
    <!-- <div class="cover-container d-flex mx-auto w-100 p-3 flex-column"> -->


    <header class="masthead mb-auto bg-white">
      <div class="inner">

        <nav class="navbar navbar-expand-lg navbar-light">


          <a class="masthead-brand navbar-brand " href="/">
            <!-- <img src="./img/icono-nav.svg" class="nav-icon" alt="nav-icon">  -->
            Simple y Creativo </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=" navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarToggleExternalContent">

            <ul class="navbar-nav ml-auto nav-masthead">
              <li class="nav-item">
                <a class="text-center nav-link " href="./index.html">Home </a>
              </li>
              <li class="nav-item">
                <a class="text-center nav-link" href="./quienes-somos.html">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a class="text-center nav-link "  href="./servicios.html">Servicios</a>
</li>
            <li class="nav-item">
        <a class="text-center nav-link active"  href="./contacto.php">Contacto</a>
</li>
</ul>
</div>
      </nav>
    </div>

  </header>
  <div class=" p-3 text-center bg-orange">
      <h1 class="font-claro">Contacto</h1>
    </div>

  <div class="container section-padding">

    <div class="form-row">

      <div class="form-group col">
        <h3>Escríbenos y te contactaremos a la brevedad!</h3>

        <form id="contact-form" class="" action="contact-form-handler.php" method="post">
        <label >Nombre</label>
        <input type="text" class="form-control" placeholder="Esteban Valencia" name="name" required>
        <label> Teléfono de contacto </label>
        <input type="number" class="form-control" placeholder="+569 25432187" name="numero">
        <label >Mail</label>
        <input type="email" class="form-control" placeholder="contacto@simpleycreativo.cl" name="email" required>
        <label >¿En qué te podemos ayudar? Cuéntanos</label>
        <textarea class="form-control" rows="3" placeholder="Escriba aquí sobre su idea o proyecto. Te contactaremos a la brevedad." name="message" required></textarea>
        <button type="submit" class="submit btn btn-lg btn-secondary mt-3" name="submit">Enviar</button>
      </div>
    </form>

<?php
include("contact-form-handler.php");
 ?>

    <div class="col d-none d-lg-block">
        <div class="">
<img src="./img/contacto.png" alt="img-contacto">
        </div>
      </div>

        </div>

  </div>


</body>
<footer class="mastfoot section-padding-footer bg-orange-dark">
<div class="inner ">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 text-center text-md-left">

<ul>
  <li><a class="nav-mastfooter" href="./index.html">Inicio</a></li>
  <li><a class="nav-mastfooter" href="./quienes-somos.html">Quienes Somos</a></li>
  <li><a class="nav-mastfooter" href="./servicios.html">Servicios</a></li>
  <li><a class="nav-mastfooter" href="./contacto.php">Contacto</a> </li>
</ul>
      </div>
      <div class="col-lg-6 col-md-6 nav-footer text-center text-md-right pb-3 ">
        <p>Simple y Creativo</p>
        <p> +569 659 610 86</p>
        <p>contacto@simpleycreativo.cl</p>
        <p> Santiago </p>

      </div>
    </div>
  </div>
</div>

<div class="bg-orange ">
      <div class="text-center">
        <p class="font-claro copyright">2020 | Simple y Creativo</p>
      </div>
    </div>


</footer>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>





</html>
