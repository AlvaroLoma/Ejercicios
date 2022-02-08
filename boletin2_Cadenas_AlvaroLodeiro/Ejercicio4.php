
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 4</h1>
    <h3>  4. Escribe un script PHP para extraer el nombre del fichero de la siguiente url:
      cadena : 'www.example.com/public_html/index.php'
      Valor esperado(fichero) : 'index.php'</h3>
    <div class="Resultado">
      <?php

      $cadena="www.example.com/public_html/index.php";
      $buscar="/";
      $aux=substr($cadena,strripos($cadena,$buscar)+1,10);
      print $aux;


       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php

        $cadena="www.example.com/public_html/index.php";
        $buscar="/";
        $aux=substr($cadena,strripos($cadena,$buscar)+1,10);
        print $aux;


         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
