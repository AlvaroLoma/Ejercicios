<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 9</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 9</h1>
    <h3>  9. Escribe un script PHP que encuentre el primer caracter diferente comparando dos cadenas.
      cadena1 : 'football'
      cadena2 : 'footboll'
      Resultado esperado : La primera diferencia entre las dos cadenas estÃ¡ en la posiciÃ³n 5: "a" <> "o"</h3>
    <div class="Resultado">
      <?php



      $cadena1="football";
      $cadena2="footboll";

      $numero=similar_text($cadena1, $cadena2);

      $dif1=substr($cadena1,$numero-2,1);

      $dif2=substr($cadena2,$numero-2,1);
      print "La primera diferencia entre las dos cadenas esta en la posicion ". ($numero-2) .": \"".$dif1 ."\"" ." <>  \"".$dif2."\"";

       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php



        $cadena1="football";
        $cadena2="footboll";

        $numero=similar_text($cadena1, $cadena2);

        $dif1=substr($cadena1,$numero-2,1);

        $dif2=substr($cadena2,$numero-2,1);
        print "La primera diferencia entre las dos cadenas esta en la posicion ". ($numero-2) .": \"".$dif1 ."\"" ." <>  \"".$dif2."\"";

         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
