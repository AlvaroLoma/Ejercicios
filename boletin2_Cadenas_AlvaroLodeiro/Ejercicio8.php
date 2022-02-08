<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 8</h1>
    <h3>  8. Escribe un script PHP que remplace la palabra "lugar" por "planeta"
      Cadena de ejemplo : 'En un lugar de la mancha de cuyo nombre.'
      Resultado esperado : En un planeta de la mancha de cuyo nombre..</h3>
    <div class="Resultado">
      <?php
      $cadena="En un lugar de la mancha de cuyo nombre.";

      $resultado=str_replace("lugar", "planeta", $cadena);

      print $resultado;

       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php


        $cadena="En un lugar de la mancha de cuyo nombre.";

        $resultado=str_replace("lugar", "planeta", $cadena);

        print $resultado;

         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
