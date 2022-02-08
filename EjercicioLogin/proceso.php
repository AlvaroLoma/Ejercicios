<?php

$usuario="Alvaro";
$contraseña ="1234";

    if(isset($_POST["Enviar"])){
      if(isset($_POST["Usuario"]) && isset($_POST["Contraseña"])){

        if($_POST["Usuario"]==""){
           header ("location: error.php?error=UserEmpty" );
        }
        elseif ($_POST["Contraseña"]=="") {
            header ("location: error.php?error=PassEmpty" );
        }
        elseif($_POST["Usuario"]!=$usuario){
          header ("location: error.php?error=BadUser" );
        }
        elseif ($_POST["Contraseña"]!=$contraseña) {
          header ("location: error.php?error=BadPass" );
        }
        elseif (($_POST["Usuario"]==$usuario) && ($_POST["Contraseña"]==$contraseña)) {
          header ("location: mipagina.php");
        }

      }else{
        header ("location: error.php?error=Login" );
      }
    }else{
      header ("location: error.php?error=Login" );
    }


 ?>
