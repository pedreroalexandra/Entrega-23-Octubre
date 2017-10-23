
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="…">
    <meta name="author" content="…">
    <title>Candidatos Elecciones 2017</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fix.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>active<?php };?>"><a class="nav-link" href="index.php">Presidentes</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='senadores-genero.php'){?>active<?php };?>"><a class="nav-link" href="senadores-genero.php">Senadores Género</a></li>
           <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='senadores-pacto.php'){?>active<?php };?>"><a class="nav-link" href="senadores-pacto.php">Senadores Pacto</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='diputados-genero.php'){?>active<?php };?>"><a class="nav-link" href="diputados-genero.php">Diputados Género</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='diputados-pacto.php'){?>active<?php };?>"><a class="nav-link" href="diputados-pacto.php">Diputados Pacto</a></li>
           <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='visualizaciones.php'){?>active<?php };?>"><a class="nav-link" href="visualizaciones.php">Visualizaciones</a></li>
        </ul>
      </div>
    </nav>
    <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>
    <div class="container">
      <div class="jumbotron">
        <h1>Elección Presidencial 2017</h1>

        <p class="lead">Se presentan a continuación los candidatos a <a href="https://es.wikipedia.org/wiki/Presidente">Presidente de la República</a> de <a href="https://es.wikipedia.org/wiki/Chile">Chile</a>, siendo en esta oportunidad ocho abanderados, uno menos de los que aparecieron en la papeleta hace cuatro años.</p>
        <p>Es importante mencionar que, además de los presidenciables para el periodo 2018-2022, en las <a href="https://www.servel.cl/elecciones-2017/">elecciones</a> de este 19 de noviembre se eligen a senadores y diputados. Éstas son las figuras que lograron inscribir formalmente sus candidaturas, donde distinguimos mediante tablas el género del participante, indicando su nombre completo, partido y lista/pacto al que pertenecen, según corresponda. </p>
       
      </div>
    </div>


    <?php } if((basename($_SERVER['PHP_SELF']))=='senadores-genero.php'){?>   
    <div class="container">
      <div class="jumbotron">
        <h1>Elección Senadores</h1>
        <p class="lead">Candidatos distinguidos por Género, indicando su Nombre completo, Partido y Lista/pacto al que pertenecen.</p>
      </div>
    </div>


    <?php } if((basename($_SERVER['PHP_SELF']))=='senadores-pacto.php'){?>   
    <div class="container">
      <div class="jumbotron">
        <h1>Elección Senadores</h1>
        <p class="lead">Distinción de los candidatos por Lista/Pacto, indicando su Nombre completo y Partido.</p>
      </div>
    </div>


  <?php } if((basename($_SERVER['PHP_SELF']))=='diputados-genero.php'){?>   
    <div class="container">
      <div class="jumbotron">
        <h1>Elección Diputados</h1>
        <p class="lead">Candidatos distinguidos por Género, indicando su Nombre completo, Partido y Lista/pacto al que pertenecen.</p>
      </div>
    </div>

<?php } if((basename($_SERVER['PHP_SELF']))=='diputados-pacto.php'){?>   
    <div class="container">
      <div class="jumbotron">
        <h1>Elección Diputados</h1>
        <p class="lead">Distinción de los candidatos por Lista/Pacto, indicando su Nombre completo, Partido y Comuna a la que representan.</p>
      </div>
    </div>


    <?php } if((basename($_SERVER['PHP_SELF']))=='visualizaciones.php'){?>   
    <div class="container">
      <div class="jumbotron">
        <h1>Gráficos</h1>
        <p class="lead">Representación de los datos obtenidos entre candidatos a Presidente, Senador y Diputado.</p>
      </div>
    </div>

 <?php };?>

