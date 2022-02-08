<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 6</h1>
    <h3> 6. Escribe un script PHP que obtenga los tres Ãºltimos caracteres de una cadena.
      Cadena de ejemplo : 'rayy@example.com'
      Valor esperado : 'com'</h3>
    <div class="Resultado">
      <?php

      $cadena="rayy@example.com";
      $buscar=".";
      $aux=substr($cadena,strripos($cadena,$buscar)+1,3);
      print $aux;

       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="rayy@example.com";
        $buscar=".";
        $aux=substr($cadena,strripos($cadena,$buscar)+1,3);
        print $aux;

         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
