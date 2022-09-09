<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
   <title>Problema 9</title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <div >
        <h2>Problema 9</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="ninos" required="">
                <label>Ingrese la cantidad de Niños</label>
            </div>
            <div class="user-box">
                <input type="text" name="ninas" required="">
                <label>Ingrese la cantidad de Niñas</label>
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
                $ninos = $_POST["ninos"];
                $ninas = $_POST["ninas"];
                $cantidad = $ninas + $ninos;
                $resultadoninos = ($ninos / $cantidad)*100;
                $resultadoninas = ($ninas / $cantidad)*100;
        ?>
                <table class="table table-dark table-striped">
                    <tr>
                        <th>Niñas</th>
                        <th>Niños</th>
                    </tr>
                    <tr>
                        <th><h2><?php echo round($resultadoninas, 2) ?></h2></th>
                        <th><h2><?php echo round($resultadoninos, 2) ?></h2></th>
                    </tr>
                </table>
        <?php
            }

        ?>

        </form>

    </div>

    </body>

</html>