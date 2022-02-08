<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 20</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 20</h1>
    <h3>  20. Escribe un script PHP que borre la(s) comas(s) de la siguiente cadena
      Cadena de ejemplo : '2,543.12'
      Valor esperado : 2543.12
      Cadena de ejemplo : '345,102,543.12'
      Valor esperado : 3451022543.12</h3>
    <div class="Resultado">
      <?php

      $cadena="345,102,543.12";
      $aux=str_replace(",","",$cadena);

      print $aux;

       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="345,102,543.12";
        $aux=str_replace(",","",$cadena);

        print $aux;

         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
