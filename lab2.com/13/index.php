<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Problema 13</title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <div >
        <h2>Problema 13</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="personas" required="">
                <label>Ingrese las personas en el banquete:</label>
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
                $personas = $_POST["personas"];
                if ($personas > 200 && $personas <= 300) {
                    echo "<h3>Costo por persona para el banquete es: 85.00$</h3>";
                } else if ($personas > 300) {
                    echo "<h3>Costo por persona para el banquete es: 75.00$</h3>";
                } else {
                    echo "<h3>Costo por persona para el banquete es: 95.00$</h3>";
                }
            }

            ?>

        </form>

    </div>

    </body>

</html>