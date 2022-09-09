<?php
    if (isset($_GET["num"])) {
$num = $_GET["num"];
    }

    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Problema 17</title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <?php
    if (!isset($_GET["num"])) {

    ?>


        <div >
            <h2>Problema 17</h2>
            <table class="table table-dark table-striped">
                <tr>
                    <th style="text-align: center;">Numero</th>
                    <th style="text-align: center;">Link</th>
                </tr>
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<tr>
            <th><h3 style='text-align: center;'>$i</h3></th>
            <th><h3 style='text-align: center;'><a href='index.php?num=";echo $i;echo "' style='text-decoration=none'><button type='button' class='btn btn-light'>Ver</button></a></h3></th>
        </tr>";
                }
                ?>
            </table>
        </div>
    <?php
    }
    else{
    ?>
        <div >
            <h2>La tabla del <?php echo $num ?></h2>
            <table class="table table-dark table-striped">
                <tr>
                    <th style="text-align: center;">numero</th>
                    <th style="text-align: center;">Resultado</th>
                </tr>
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<tr>
            <th><h3 style='text-align: center;'>$num x $i</h3></th>
            <th><h3 style='text-align: center;'>";echo $num*$i ;echo "</h3></th>
        </tr>";
                }
                ?>
            </table>
        </div>
    <?php
    }
    ?>

    </body>

</html>