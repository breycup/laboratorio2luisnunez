<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Problema 18</title>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

        <div >
            <h2>Problema 18</h2>
            <table class="table table-dark table-striped">
                <tr>
                    <th style="text-align: center;">Numero</th>
                    <th style="text-align: center;">Encriptado</th>
                    <th style="text-align: center;">Ver</th>
                </tr>
                <?php
                for ($i = 1; $i <= 100; $i++) {
                    echo "<tr>
            <th><h3 style='text-align: center;'>$i</h3></th>
            <th><h3 style='text-align: center;'>";echo md5($i);echo "</h3></th>
            <th><h3 style='text-align: center;'><a href='cifrado.php?num=";echo $i;echo "' style='text-decoration:none'><button type='button' class='btn btn-light'>Ver</button></a></h3></th>
        </tr>";
                }
                ?>
            </table>
        </div>

    </body>

</html>