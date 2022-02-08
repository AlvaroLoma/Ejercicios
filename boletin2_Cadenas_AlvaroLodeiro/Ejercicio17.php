<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 17</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 17</h1>
    <h3>17. Escribe un script PHP que borre todas las apariciones del caracter "/" de una cadena
    Original cadena : 'En un  / lugar de  / la mancha de / cuyo nombre'
    Valor esperado : 'En un lugar de la mancha de cuyo nombre'</h3>
    <div class="Resultado">
      <?php

      $cadena="En un  / lugar de  / la mancha de / cuyo nombre";
      $aux=str_replace("/","",$cadena);

      print $aux;
       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="En un  / lugar de  / la mancha de / cuyo nombre";
        $aux=str_replace("/","",$cadena);

        print $aux;
         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
