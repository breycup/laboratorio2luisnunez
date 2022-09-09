<?php
if (isset($_GET["num"])) {
    $num = $_GET["num"];
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>numeros cifrado UwU <?php echo $num ?></title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <div >
        <h2>Cifrado de numero <?php echo $num ?></h2>
        <?php
        echo "<h2>". md5($num). "</h2>";
        ?>
    </div>

    </body>

</html>