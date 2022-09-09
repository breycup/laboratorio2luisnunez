<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
   <title>Problema 11</title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <div >
        <h2>Problema 11</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="cl" required="">
                <label>Ingrese los centimetros:</label>
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
                $c = $_POST["cl"];
                $p = $c * .39737;
                echo "<h3> $c  centimetros son: $p pulgadas</h3>";
            }

            ?>

        </form>

    </div>

   </body>

</html>