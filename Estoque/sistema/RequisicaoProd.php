<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <header>
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">
                    <img src="../img/logo.png" width="400" height="100" alt="">
                </a>
            </nav>
        </header>
    </header>
    <section>
        <div class="card card-body ">
            <form action="cadastrar.php" , method="post" class="form-group m-2 row">
                <p class="col-3">
                    <label>N requisição</label>
                    <input type="number" name="numeroRequisicao" class="form-control m-1" required>
                </p>
                <p class="col-3">
                    <label>Centro de custo</label>
                    <input type="number" name="centroCusto" class="form-control m-1" required>
                </p>
                <p class="col-3">
                    <label>data</label>
                    <input type="date" name="data" class="form-control m-1" required>
                </p>
                <p class="col-3">
  
                    <button type="submit" name="salvar" class="btn btn-outline-success  mxt1">Adicionar</button>
                </p>
            </form>

            <form class="row m-3">
                <p class="w-25 m-1">
                    <label>quantidade retirada</label>
                    <input type="number" name="qtd_produto" class="form-control m-1" required>
                </p>
                <p>
                    <button type="submit" name="salvar" class="btn btn-outline-success mxt2">Adicionar</button>
                </p>
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