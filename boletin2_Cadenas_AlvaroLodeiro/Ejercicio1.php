<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 1</h1>
    <h3>  1. Escribe un script PHP para:
        a) transforma un cadena con todas sus letras en mayúsculas.
        b) transforma un cadena con todas sus letras en minúsuclas.
        c) primera letra de la cadena en mayúsculas.
        d) primera letra de cada palabra de mi cadena en mayúsculas.
        La cadena a transformar es: "En un lugar de la mancha de cuyo nombre"</h3>
    <div class="Resultado">
      <?php

      $cadena ="En un lugar de la mancha de cuyo nombre";

      $cadena=strtoupper($cadena);
      print"<p> $cadena</p>";


      $cadena=strtolower($cadena);
      print"<p> $cadena</p>";

      $cadena=ucfirst($cadena);
      print"<p> $cadena</p>";

      $cadena=ucwords($cadena);
      print"<p> $cadena</p>";

       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena ="En un lugar de la mancha de cuyo nombre";

        $cadena=strtoupper($cadena);
        print"<p> $cadena</p>";


        $cadena=strtolower($cadena);
        print"<p> $cadena</p>";

        $cadena=ucfirst($cadena);
        print"<p> $cadena</p>";

        $cadena=ucwords($cadena);
        print"<p> $cadena</p>";

         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
