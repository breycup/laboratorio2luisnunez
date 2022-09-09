<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
   <title>Problema 8</title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <div >
        <h2>Problema 8</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="num1" required="">
                <label>Ingrese la inversión de la persona 1: </label>
            </div>
            <div class="user-box">
                <input type="text" name="num2" required="">
                <label>Ingrese la inversión de la persona 2: </label>
            </div>
            <div class="user-box">
                <input type="text" name="num3" required="">
                <label>Ingrese la inversión de la persona 3: </label>
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
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];

                $total = ($num1 + $num2 + $num3);

                $priinv = ($num1 * 100) / $total;
                $seginv = ($num2 * 100) / $total;
                $terinv = ($num3 * 100) / $total;

                echo "<h2>El porcentaje de inversión de la primera persona es de: " . $priinv . "%";
                echo "<br>" . "El porcentaje de inversión de la segunda persona es de: " . $seginv . "%";
                echo "<br>" . "El porcentaje de inversión de la tercera persona es de: " . $terinv . "%</h2>";
            }
            ?>

        </form>

    </div>

    </body>

</html>