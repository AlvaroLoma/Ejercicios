<?php


if(isset($_GET["Enviar"])){
    guardarLibro();
}

function guardarLibro(){

  if(isset($_GET['Titulo']) && isset($_GET['Tipo'])){

    if(!empty($_GET['Titulo']) && !($_GET['Titulo']==" ")){//titulo como cadena en blanco
      $titulo = $_GET['Titulo'];
      $tipo = $_GET['Tipo'];
      $observaciones =$_GET['Observaciones'];
      $fichero =fopen('libros.txt','a+b',true);
      if($fichero){
        $cadena ='Titulo: '.$titulo."\n";
        if($tipo==1){
          $cadena=$cadena."Tipo: Ejemplar\n";
        }else{
            $cadena=$cadena."Tipo: Colecciones\n";
        }
        $cadena=$cadena.'Observaciones: '.$observaciones."\n -------------------------------------- \n";
        fwrite($fichero,$cadena);
        fclose($fichero);
        print("Datos guardados correctamente");

      }else{
        print("Error al abrir el archivo de escritura");
      }

    }else{
      print("Error el titulo no puede estar vacio o ser un espacio en blanco");

    }
  }

  print('<br><a href=\'libros.html\'>Volver</a><br>');

}



 ?>
