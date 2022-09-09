<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Problema 2</title>
</head>

<body>
  <div >
    <h2>Problema 2</h2>
    <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;

    echo "<h2>Numero 1:  $num1 <br>Numero 2: $num2 <br><br></h2>";
    echo "<h2>Suma:  $suma </h2>";
    echo "<h2>Resta:  $resta </h2>";
    echo "<h2>Multiplicación:  $multiplicacion </h2>";
    echo "<h2>División:  $division </h2>";
    ?>
  </div>

</body>

</html>