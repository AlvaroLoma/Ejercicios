
<?php


$fp = fopen("libros.txt", "r");
if($fp){
  while (!feof($fp)){
      $linea = fgets($fp);
      echo $linea.'<br>';
  }
  print("Datos leidos satisfactoriamente");
  fclose($fp);
}else{
  print("Error al abrir el archivo");
}



print('<br><a href=\'libros.html\'>Volver</a><br>');




 ?>
