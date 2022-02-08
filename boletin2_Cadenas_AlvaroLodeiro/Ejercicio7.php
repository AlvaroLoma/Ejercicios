<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 7</h1>
    <h3>  7. Escribe un script PHP que genere una contraseÃ±a aleatoria desde la siguiente cadena (no usar la
     funciÃ³n random):
      Cadena de ejemplo : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
      Nota : La longitud de la contraseÃ±a puede ser de 6, 7, 8 etc.</h3>
    <div class="Resultado">
      <?php

      $cadena="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
      $contraseña="";

      for ($i=0; $i <8 ; $i++) {
        $cadena=str_shuffle($cadena);
        $contraseña.=substr($cadena,0,1);

      }

      print $contraseña;


       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
        $contraseña="";

        for ($i=0; $i <8 ; $i++) {
          $cadena=str_shuffle($cadena);
          $contraseña.=substr($cadena,0,1);

        }

        print $contraseña;


         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
