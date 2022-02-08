<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 15</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Ejercicio 15</h1>
    <h3>  15. Escribe un script PHP que elimine todos los ceros a la izquierda de una cadena
      Original cadena : '000547023.24'
      Valor esperado : '547023.24'</h3>
    <div class="Resultado">
      <?php
      $cadena="000547023.24";
      $cadena2="";
      $indice=0;
      $salir =FALSE;


      while($salir==FALSE){

        $aux=substr($cadena,$indice,1);
        if($aux !=="0"){
          $cadena2=substr($cadena,$indice,strlen($cadena) - 1);
          $salir=TRUE;
        }else{

          $cadena=substr($cadena,$indice,strlen($cadena));
          ++$indice;
        }
      }

      print $cadena2;
       ?>

    </div>
    <div class="Codigo">
      <?php
        highlight_string('
        <?php
        $cadena="000547023.24";
        $cadena2="";
        $indice=0;
        $salir =FALSE;


        while($salir==FALSE){

          $aux=substr($cadena,$indice,1);
          if($aux !=="0"){
            $cadena2=substr($cadena,$indice,strlen($cadena) - 1);
            $salir=TRUE;
          }else{

            $cadena=substr($cadena,$indice,strlen($cadena));
            ++$indice;
          }
        }

        print $cadena2;
         ?>
         ');


       ?>

    </div>

    <a class="volver" href="index.php">Volver</a>

  </body>
</html>
