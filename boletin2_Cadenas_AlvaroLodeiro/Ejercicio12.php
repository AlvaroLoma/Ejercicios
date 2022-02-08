<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 12</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 12</h1>
    <h3>12. Escribe un script PHP que imprima el siguiente caracter de un caracter dado.
    Caracter de ejemplo : 'a'
    Valor esperado : 'b'
    Caracter de ejemplo : 'z'
    Valor esperado : 'a'</h3>
    <div class="Resultado">
      <?php
      $cadena="abcefghijklmnopqrstuvwxyz";
      $caracter="a";

      if($caracter==="z"){
          $aux=substr($cadena,0,1);
      }else{
        $aux=substr($cadena,strripos($cadena,$caracter)+1,1);

      }
        print $aux;
       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="abcefghijklmnopqrstuvwxyz";
        $caracter="a";

        if($caracter==="z"){
            $aux=substr($cadena,0,1);
        }else{
          $aux=substr($cadena,strripos($cadena,$caracter)+1,1);

        }
          print $aux;
         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
