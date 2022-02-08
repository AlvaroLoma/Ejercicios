<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 18</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 18</h1>
    <h3>  18. Escribe un script PHP que devuelva los caracteres despuÃ©s del Ãºltimo "/" de una URL
      Ejemplo de URL : 'http://www.example.com/5478631'
      Valor esperado : '5478631'</h3>
    <div class="Resultado">
      <?php

      $cadena="http: www.example.com/5478631";

      $aux=substr($cadena,strripos($cadena,"/")+1,strlen($cadena) - 1);

      print$aux;

       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="http: www.example.com/5478631";

        $aux=substr($cadena,strripos($cadena,"/")+1,strlen($cadena) - 1);

        print$aux;

         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
