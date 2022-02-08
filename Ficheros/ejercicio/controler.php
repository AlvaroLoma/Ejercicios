<?php


//  print_r($_FILES);

foreach ($_FILES["archivo"]["error"] as $key => $value) {
      if($value==UPLOAD_ERR_OK){//subido

        if($_FILES['archivo']['size'][$key]<(20*1024*1024)){//tamaño


          if($_FILES['archivo']['type'][$key] == "text/plain"){//tipo
            $rand = rand(1000,999999);
            $tmp_name=$_FILES["archivo"]["tmp_name"][$key];
            $name = basename($_FILES["archivo"]["name"][$key]);
            $newName=$rand.$name;
            if(move_uploaded_file($tmp_name,'temp/'.$newName)){

              $fichero =fopen('temp/'.$newName,'a+b',true);
              if($fichero){
                fwrite($fichero,date(DATE_RFC2822));
                fclose($fichero);
                //escrito y cerrado
                $ruta = 'temp/'.$newName;

                print('<a href='.$ruta.' download='.$newName.'>Descargar</a><br>');
              }
            }else{
              print" el archivo ".basename($_FILES["archivo"]["name"][$key]).' no pudo ser movido';
            }

          }else{
            print" el archivo ".basename($_FILES["archivo"]["name"][$key]).' no tiene la extension permitida';
          }

        }else{
          print" el archivo ".basename($_FILES["archivo"]["name"][$key]).' sobrepasa el limite permitido';
        }

      }else{
        print"Error al subir el archivo ".basename($_FILES["archivo"]["name"][$key]);
      }
}


 ?>
