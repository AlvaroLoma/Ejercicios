<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 14</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 14</h1>
    <h3>  14. Escribe un script PHP que devuelva la primera palabra de una frase.
      Original cadena : 'En un lugar de la mancha de cuyo nombre'
      Valor esperado : 'En'</h3>
    <div class="Resultado">
      <?php

      $cadena="En un lugar de la mancha de cuyo nombre";
      $aux=substr($cadena,0, strpos($cadena," "));
       print $aux;


       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="En un lugar de la mancha de cuyo nombre";
        $aux=substr($cadena,0, strpos($cadena," "));
         print $aux;


         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
