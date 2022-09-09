<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Problema 2</title>
</head>

<body>
    <div>
        <h2>Problema 5</h2>
        <?php
        $nombre = $_GET["nombre"];
        $cl1 = $_GET["cl1"];
        $cl2 = $_GET["cl2"];
        $cl3 = $_GET["cl3"];
        $cl4 = $_GET["cl4"];
        $cl5 = $_GET["cl5"];

        $resultado = ($cl1 + $cl2 + $cl3 + $cl4 + $cl5) / 5;
        
        echo "<h2>Nombre del alumno:  $nombre</h2>";
        echo "<h2>Notas: $cl1,  $cl2,  $cl3, $cl4, $cl5 </h2>";
        echo "<h2>Promedio:  $resultado </h2>";
        ?>
    </div>
    </body>

</html>