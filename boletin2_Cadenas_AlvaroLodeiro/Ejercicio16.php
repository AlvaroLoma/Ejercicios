<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 16</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 16</h1>
    <h3>  16. Escribe un script PHP que borre una parte de una cadena
      Original cadena : 'En un lugar de la mancha de cuyo nombre'
      Borrar 'mancha' de la anterior cadena.
      Valor esperado : 'En un lugar de la de cuyo nombre'</h3>
    <div class="Resultado">
      <?php

      $cadena="En un lugar de la mancha de cuyo nombre";
      $aux=str_replace("mancha","",$cadena);

      print $aux;
       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="En un lugar de la mancha de cuyo nombre";
        $aux=str_replace("mancha","",$cadena);

        print $aux;
         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
