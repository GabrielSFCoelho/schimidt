<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>

    <body>

        <header>
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">
                    <img src="../img/logo.png" width="400" height="100" alt="">
                </a>
            </nav>
        </header>

        <?php
            include_once '../database/conn.php';


            $conn = conectar();
            $pesquisar = $_POST['pesquisar'];

            $result = "SELECT * FROM produtos_tb WHERE nome_produto LIKE '%$pesquisar%' LIMIT 5";

            $resultado = mysqli_query($conn, $result);
            echo "<table class='table table-striped text-center'>";
            echo "<th>Nome</th>";
            echo "<th>Unidade</th>";
            echo "<th>Unidade</th>";
            echo "<th>Quantidade</th>";
            echo "<th>Localização</th>";
            while ($produtos = mysqli_fetch_assoc($resultado)) {

                echo "<tr>";
                echo "<td>" . $produtos['nome_produto'] . "</td>";
                echo "<td>" . $produtos['und_produto'] . "</td>";
                echo "<td>" . $produtos['qtd_produto'] . "</td>";
                echo "<td>" . $produtos['codigo_produto'] . "</td>";
                echo "<td>" . $produtos['localizacao'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>

</html>