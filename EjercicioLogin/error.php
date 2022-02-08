<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <h1>Error</h1>
    <?php
      $error = $_GET["error"];

      if($error=="UserEmpty"){
        print "<p>Error: El usuario no puede estar vacio</p>";
      }
      if ($error=="PassEmpty") {
        print "<p>Error: La contraseña no puede estar vacia</p>";
      }
      if ($error=="BadUser") {
        print "<p>Error: El usuario no coincide</p>";
      }
      if ($error=="BadPass") {
        print "<p>Error: La contraseña no coincide</p>";
      }
      if ($error=="Login") {
        print "<p>Error: Algo fue mal durante el inicio de sesion</p>";
      }


     ?>
<a href="home.php">Volver al login</a>
  </body>
</html>
