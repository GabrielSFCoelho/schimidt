<?php
include_once '../database/produtos.dao.php';
if (!isset($_GET['id_produto'])) {
    header('Location: index.php');
} else {
    $result = buscar_produto($_GET['id_produto']);
    if ($result == null) {
        header('Location: index.php');
    } else {
        $produtos = mysqli_fetch_assoc($result);
    }
}
;
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
        <a href="logout.php" class="btn btn-outline-info m-3">Cancelar edição</a>
    </header>
    <section>
        <h3 class="m-2">EDITAR PRODUTO</h3>
        <div class="card card-body">
            <form action="editado.php" , method="post" class="form-group w-25 m-2">
                <p>
                    <label>NOME</label>
                    <input type="text" name="nome_produto" required value="<?= $produtos['nome_produto'] ?>"
                        class="form-control m-1">
                </p>
                <p>
                    <label>UND</label>
                    <input type="text" name="und_produto" required value="<?= $produtos['und_produto'] ?>"
                        class="form-control m-1">
                </p>
                <p>
                    <label>QTD</label>
                    <input type="number" name="qtd_produto" required value="<?= $produtos['qtd_produto'] ?>"
                        class="form-control m-1">
                </p>
                <p>
                    <label>CODIGO</label>
                    <input type="number" name="codigo_produto" required value="<?= $produtos['codigo_produto'] ?>"
                        class="form-control m-1">
                </p>
                <p>
                    <label>LOCALIZAÇÃO</label>
                    <input type="number" name="localizacao" required value="<?= $produtos['localizacao'] ?>"
                        class="form-control m-1">
                </p>
                <p>
                    <button type="submit" name="salvar" class="btn btn-outline-success">Salvar alterações</button>
                </p>
                <input type="hidden" name="id_produto" value="<?= $produtos['id_produto'] ?>">
            </form>
        </div>


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