<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 1</h1>
    <h3>  2. Escribe un script PHP para dividir la siguiente cadena:
    Cadena de entrada: '082307'
    Salida esperada : 08:23:07 </h3>
    <div class="Resultado">
      <?php

      $cadena="082307";
      $aux="";
      $aux=substr($cadena,0,2);
      $aux.=":";
      $aux.=substr($cadena,2,2);
      $aux.=":";
      $aux.=substr($cadena,4,2);
      print $aux;

      ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php
        $cadena="082307";
        $aux="";
        $aux=substr($cadena,0,2);
        $aux.=":";
        $aux.=substr($cadena,2,2);
        $aux.=":";
        $aux.=substr($cadena,4,2);
        print $aux;


        ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
