<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Problema 7</title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <div class="login-box">
        <h2>Problema 7</h2>
        <form action="index.php" method="post" name="CreateForm">
            <div class="user-box">
                <input type="text" name="presu" required=""> 
                <label>Presupuesto del hospital:</label>
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
            $presu = $_POST["presu"];
            $gine = $presu * .4;
            $trau = $presu * .3;
            $pedi = $presu * .3;
            echo "<h2>El presupuesto de ginecologia es: ".$gine."$ <br>";
            echo "El presupuesto de traumatologia es: ".$trau."$ <br>";
            echo "El presupuesto de pediatria es: ".$pedi."$ </h2><br>";
            }
            ?>

        </form>

    </div>

    </body>

</html>