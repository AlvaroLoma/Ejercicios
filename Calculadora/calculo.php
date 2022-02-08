<?php

$numero1=$_POST["operador1"];
$numero2=$_POST["operador2"];
$numero3=$_POST["operador3"];
$operando=$_POST["operando"];

  if(isset($_POST["operador1"]) && isset($_POST["operador2"]) && isset($_POST["operador3"])){
    if(is_numeric($_POST["operador1"])){
      if(is_numeric($_POST["operador2"]){
        if(is_numeric($_POST["operador3"]))){
                if($operando=="Suma"){
                  print"La suma de $numero1 + $numero2 + $numero3 es :".($numero1+$numero2+$numero3)." ";
                }elseif($operando=="Restar"){
                    print"La resta de $numero1 - $numero2 - $numero3 es :".($numero1-$numero2-$numero3)." ";
                }elseif($operando=="Dividir"){
                    print"La division de ($numero1 / $numero2) / $numero3 es :".(($numero1/$numero2)/$numero3)." ";

                }elseif ($operando=="Multiplicar") {
                    print"La multiplicacion de $numero1 * $numero2 * $numero3 es :".($numero1*$numero2*$numero3)." ";
                }
        }else{
          print"el tercer operador no puede contener letras";
        }

      }else{
        print"el segundo operador no puede contener letras";
      }
    }else{
      print"el primer operador no puede contener letras";
    }
  }




 ?>
