<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
     <title>Problema 2</title>
</head>

<body>
    <div >
        <h2>Problema 3</h2>
        <?php
        $radio = $_GET["radio"];
        $area = 3.1415927 * ($radio * $radio);
        echo "<h2>Radio: " . $radio . "<br><br></h2>";
        echo "<h2>Área: " . $area . "</h2>";
        ?>
    </div>
</body>

</html>