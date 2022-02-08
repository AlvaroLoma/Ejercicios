<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 13</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 13</h1>
    <h3>13. Escribe un script PHP que inserte en una especificada posiciÃ³n una cadena dada.
    Original cadena : 'En un lugar de la mancha de cuyo nombre'
    Insertar 'test' entre 'la' y 'mancha'.
    Valor esperado : 'En un lugar de la test mancha de cuyo nombre'</h3>
    <div class="Resultado">
      <?php


      $foo = "En un lugar de la mancha de cuyo nombre";
      $cadena= substr($foo, 0,strripos($foo,"la")+2) . " test" . substr($foo, strripos($foo,"la")+2,strlen($foo) - 1);
      print $cadena;
       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php


        $foo = "En un lugar de la mancha de cuyo nombre";
        $cadena= substr($foo, 0,strripos($foo,"la")+2) . " test" . substr($foo, strripos($foo,"la")+2,strlen($foo) - 1);
        print $cadena;
         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
