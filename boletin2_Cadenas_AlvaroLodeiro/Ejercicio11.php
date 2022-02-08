<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 11</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 11</h1>
    <h3>  11. Escribe un script PHP que obtenga de una URL el nombre del fichero sin extensiÃ³n.
      URL de ejemplo : "https: www.example.com/index.php"
      Valor esperado : 'index'</h3>
    <div class="Resultado">
      <?php
      
      $cadena="www.example.com/index.php";
      $buscar="/";
      $aux=substr($cadena,strripos($cadena,$buscar)+1,5);
      print $aux;
       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="www.example.com/index.php";
        $buscar="/";
        $aux=substr($cadena,strripos($cadena,$buscar)+1,5);
        print $aux;
         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
