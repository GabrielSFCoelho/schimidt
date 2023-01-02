<?php
include_once('../database/produtos.dao.php');
?>
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
            <a class="navbar-brand" href="logout.php">
                <img src="../img/logo.png" width="400" height="100" alt="">
            </a>
        </nav>
    </header>
    <section>
        <div class="row">
            <div class="col-3 text-left">
                <a class="btn btn-primary m-2" data-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    CADASTRAR PRODUTO
                </a>
                <a class="btn btn-primary m-2" href="RequisicaoProd.php" role="button">REQUISIÇÃO DE PRODUTO</a>
            </div>
            <span class="col-8"></span>
            <div class="col-1 text-rigth">
            <a class="btn btn-primary m-2" href="gerar_planilha.php" role="button">RELATORIO</a>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form action="cadastrar.php" , method="post" class="form-group w-25 m-2">
                    <p>
                        <label>NOME</label>
                        <input type="text" name="nome_produto" class="form-control m-1" required>
                    </p>
                    <p>
                        <label>UND</label>
                        <input type="text" name="und_produto" class="form-control m-1" required>
                    </p>
                    <p>
                        <label>QTD</label>
                        <input type="number" name="qtd_produto" class="form-control m-1" required>
                    </p>
                    <p>
                        <label>CODIGO</label>
                        <input type="number" name="codigo_produto" class="form-control m-1" required>
                    </p>
                    <p>
                        <label>LOCALIZAÇÃO</label>
                        <input type="number" name="localizacao" class="form-control m-1" required>
                    </p>
                    <p>
                        <button type="submit" name="salvar" class="btn btn-outline-success">Cadastrar</button>
                    </p>
                </form>
            </div>
        </div>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">
                <h4>LISTA DE PRODUTOS</h4>
            </a>
            <form class="form-inline"method="post" action="pesquisar.php">
                <input class="form-control mr-sm-2" type="text" name="pesquisar" placeholder="Pesquisar" aria-label="Pesquisar">
                
                <input type="submit" value="ENVIAR" class="btn btn-outline-success my-2 my-sm-0">
            </form>
        </nav>

        <?php
        echo exibir_produtos();
        ?>

    </section>
    <footer>

    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>

</html>