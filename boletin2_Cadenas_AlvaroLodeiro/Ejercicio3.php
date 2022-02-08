<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 3</h1>
    <h3> 3. Escribe un script PHP que compruebe si la cadena indicada contiene la palabra "cuyo"
      cadena : 'En un lugar de la mancha de cuyo nombre.'
      palabra a buscar: "cuyo".</h3>
    <div class="Resultado">
      <?php

      $cadena="En un lugar de la mancha de cuyo nombre.";
      $buscar="cuyo";
      $pos = strpos($cadena,$buscar );

      if ($pos === false) {
          print "<p>La cadena '$buscar' no fue encontrada en la cadena '$cadena' </p>";
      } else {
          print "<p>La cadena '$buscar' fue encontrada en la cadena '$cadena' </P>";
          print "<p> y existe en la posición $pos </p>";
      }

       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php


        $cadena="En un lugar de la mancha de cuyo nombre.";
        $buscar="cuyo";
        $pos = strpos($cadena,$buscar );

        if ($pos === false) {
            print "<p>La cadena ""$buscar" no fue encontrada en la cadena ""$cadena" </p>";
        } else {
            print "<p>La cadena ""$buscar" fue encontrada en la cadena ""$cadena" </P>";
            print "<p> y existe en la posición $pos </p>";
        }

         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
