<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Problema 2</title>
</head>

<body>
    <div>
        <h2>Problema 4</h2>
        <?php
        $horas = $_GET["horas"];
        $salario = $_GET["salario"];

        $salariobruto = $horas * $salario;
        define("descuento", 0.2);
        $desc = descuento * $salariobruto;
        $salarioneto = $salariobruto - $desc;

        echo "<h2>Horas Trabajadas:  $horas </h2>";
        echo "<h2>Salario por hora:  $salario $</h2>";
        echo "<h2>Salario Bruto: $salariobruto $</h2>";
        echo "<h2>Salario Neto:  $salarioneto $</h2>";
        ?>
    </div>
</body>

</html>