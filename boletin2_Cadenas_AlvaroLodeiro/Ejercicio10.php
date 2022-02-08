<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 10</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 10</h1>
    <h3>  10. Escribe un script PHP que separe una cadena y su resultado sea un array.
      Cadena de ejemplos : "Uno, dos, tres, cuatro";
      Resultado esperado : ["Uno", "dos", "tres", "cuatro"]</h3>
    <div class="Resultado">
      <?php

      $cadena  = "Uno, dos, tres, cuatro";
      $subcadena = explode(", ", $cadena);
      print "[\"". $subcadena[0]."\", \"". $subcadena[1]."\"".", \"". $subcadena[2]."\"".", \"". $subcadena[3]."\"]";   


       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena  = "Uno, dos, tres, cuatro";
        $subcadena = explode(", ", $cadena);
        print "[\"". $subcadena[0]."\", \"". $subcadena[1]."\"".", \"". $subcadena[2]."\"".", \"". $subcadena[3]."\"]";


         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
