<?php
if (isset($_GET["num"])) {
    $num = $_GET["num"];
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>numero cifrado x2 <?php echo $num ?></title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <div class="login-box3">
        <h2>numero cifrado x2 <?php echo $num ?></h2>
        <?php
        echo "<h2>". md5($num). "</h2>";
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>