<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Problema 6</title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <div >
        <h2>Problema 6</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="nombre" required=""> 
                <label>Nombre</label>
            </div>
            <div class="user-box"> <input type="text" name="p1" required="">
                <label>Parcial 1</label>
            </div>
            <div class="user-box">
                <input type="text" name="p2" required="">
                <label>Parcial 2</label>
            </div>
            <div class="user-box">
                <input type="text" name="p3" required="">
                <label>Parcial 3</label>
            </div>
            <div class="user-box">
                <input type="text" name="ef" required="">
                <label>Examen Final</label>
            </div>
            <div class="user-box">
                <input type="text" name="tf" required="">
                <label>Trabajo Final</label>
            </div>
            <a href="#">
                <input type="submit" value="Submit" style="background:none; border-width:0px; color:black; text-decoration:none;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </a>
            <a href="index.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Reset
            </a>

            <?php
            if ($_POST) {
                $nombre = $_POST["nombre"];
                $n1 = $_POST["p1"];
                $n2 = $_POST["p2"];
                $n3 = $_POST["p3"];
                $n4 = $_POST["ef"];
                $n5 = $_POST["tf"];
                if ($n1 < 0 || $n1 > 100) {
                    echo "El valor de la nota 1 es incorrecto";
                } else if ($n2 < 0 || $n2 > 100) {
                    echo "El valor de la nota 2 es incorrecto";
                } else if ($n3 < 0 || $n3 > 100) {
                    echo "El valor de la nota 3 es incorrecto";
                } else if ($n4 < 0 || $n4 > 100) {
                    echo "El valor de la nota 4 es incorrecto";
                } else if ($n5 < 0 || $n5 > 100) {
                    echo "El valor de la nota 5 es incorrecto";
                } else {
                    $prom1 = ((($n1 + $n2 + $n3) / 3) * .55);
                    $prom2 = (($n4) * .30);
                    $prom3 = (($n5) * .15);
                    $promfin = $prom1 + $prom2 + $prom3;

                    echo "<h2>El promedio es: " . $promfin . "<br>";
                    if ($promfin >= 61) {
                        echo "El estudiante $nombre paso la materia con $promfin";
                    } else {
                        echo "El estudiante $nombre perdio la materia con $promfin </h2>";
                    }
                }
            }
            ?>

        </form>

    </div>

    </body>

</html>