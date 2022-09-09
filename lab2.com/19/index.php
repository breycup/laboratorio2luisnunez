<?php
if (isset($_GET["num"])) {
    $num = $_GET["num"];
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
   <title>Problema 19</title>
    <style>
        h5 {
            color: black;
        }
    </style>
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
                <th style="text-align: center;">Modal</th>
            </tr>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo "<tr>
            <th><h3 style='text-align: center;'>$i</h3></th>
            <th><h3 style='text-align: center;'>" . md5($i) . "</h3></th>
            <th><h3 style='text-align: center;'><a href='cifrado.php?num=" . $i . "' style='text-decoration:none'><button type='button' class='btn btn-light'>Ver</button></a></h3></th>";
            ?>
                <th>
                    <h3 style="text-align: center;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Ver
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog        ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">El cifrado de <?php echo $i ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>
                                            <?php
                                                echo md5($i);
                                            ?>
                                            </h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h3>
                </th>
            <?php echo "</tr>";
            }
            ?>
        </table>
    </div>

   </body>

</html>