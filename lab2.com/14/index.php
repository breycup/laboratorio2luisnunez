<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Problema 14</title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <div >
        <h2>Problema 14</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="annio" required="">
                <label>cuantos años tienes en la tienda:</label>
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
                $annio = $_POST["annio"];
                if ($annio == 1) {
                    echo "<h3>Bono de 100$</h3>";
                } else if ($annio == 2) {
                    echo "<h3>Bono de 200$</h3>";
                } else if ($annio == 3) {
                    echo "<h3>Bono de 300$</h3>";
                } else if ($annio == 4) {
                    echo "<h3>Bono de 400$</h3>";
                } else if ($annio == 5) {
                    echo "<h3>Bono de 500$</h3>";
                } else {
                    echo "<h3>Bono de 1000$</h3>";
                }
            }

            ?>

        </form>

    </div>

    </body>

</html>