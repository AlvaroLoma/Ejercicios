
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 5</h1>
    <h3> 5. Escribe un script PHP que extraiga el nombre de usuario del siguiente email.
      Cadena de ejemplo : 'rayy@example.com'
      Valor esperado : 'rayy'</h3>
    <div class="Resultado">
      <?php

      $cadena="rayy@example.com";
      $buscar="@";
      $aux=substr($cadena,0,strripos($cadena,$buscar));
      print $aux;

       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="rayy@example.com";
        $buscar="@";
        $aux=substr($cadena,0,strripos($cadena,$buscar));
        print $aux;

         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
