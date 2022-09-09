<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Problema 16</title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <div >
        <h2>Problema 15</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="n" required="">
                <label>Ingrese un numero:</label>
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
                $n = $_POST["n"];
                for ($a = 1; $a <= $n; $a++) {
                    for ($m = 1; $m <= $a; $m++) {
                        echo " * ";
                    }
                    echo "<br>\n";
                }
            }

            ?>

        </form>

    </div>

   </body>

</html>