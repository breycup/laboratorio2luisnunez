<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Problema 1</title>
</head>

<body>
    <div >
        <h2>Problema 1</h2>
        <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        $result = $num1 + $num2;
        echo "<h2>Numero 1: " . $num1 . "<br>Numero 2: " . $num2 . "<br><br></h2>";
        echo "<h2> Resultado: " . $result . "</h2>";
        ?>

    </div>

</body>

</html>