<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 19</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 19</h1>
    <h3>19. Escribe un script PHP que seleccione las primera cinco palabras.
    Cadena de ejemplo : 'En un lugar de la de cuyo nombre'
    Valor esperado : 'En un lugar de la'</h3>
    <div class="Resultado">
      <?php

      $cadena="En un lugar de la de cuyo nombre";
      $aux="";
      for ($i=0; $i < 5 ; $i++) {
        $indice=strpos($cadena," ");
        $aux.=" ".substr($cadena,0, strpos($cadena," "));
        $cadena=substr($cadena,$indice+1,strlen($cadena));

      }
      print $aux;

       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="En un lugar de la de cuyo nombre";
        $aux="";
        for ($i=0; $i < 5 ; $i++) {
          $indice=strpos($cadena," ");
          $aux.=" ".substr($cadena,0, strpos($cadena," "));
          $cadena=substr($cadena,$indice+1,strlen($cadena));

        }
        print $aux;

         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
