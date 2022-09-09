<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Problema 12</title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <div >
        <h2>Problema 12</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div>
                <input type="text" name="k" required="">
                <label>Ingrese los kilos:</label>
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
                $k = $_POST["k"];
                $l = $k * 2.2046;
                echo "<h3> $k  kilogramos son: $l libras</h3>";
            }

            ?>

        </form>

    </div>

   </body>

</html>