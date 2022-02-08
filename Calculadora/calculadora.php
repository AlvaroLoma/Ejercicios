<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

    <form class="formulario" action="calculo.php" method="post">
      <h1>Calculadora</h1>
      <label for="operador1">Numero 1º: <input type="text" name="operador1" value="0"> </label><br>
        <label for="operador2">Numero 2º: <input type="text" name="operador2" value="0"> </label><br>
          <label for="operador3">Numero 3º: <input type="text" name="operador3" value="0"> </label><br>
          <select class="" name="operando" required>
            <option value="Suma">Sumar</option>
            <option value="Restar">Restar</option>
            <option value="Multiplicar">Multiplicar</option>
            <option value="Dividir">Dividir</option>

          </select><br>
          <label for="Enviar"><input class="enviar" type="submit" name="Enviar" value="Enviar"> </label>


    </form>

  </body>
</html>
