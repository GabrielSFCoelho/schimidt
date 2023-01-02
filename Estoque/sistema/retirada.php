<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <a href="logout.php">Sair</a>
    </header>
    <section>
        <form action="cadastrarRetiradas.php" ,method="post">
            <p>
                <label>Centro de Custo</label>
                <input type="text" name="CentroCusto" id="CentroCusto" required>
            </p>
            <p>
                <label>Qtd Retirada</label>
                <input type="text" name="QtdRetirada" id="QtdRetirada" required>
            </p>
            <p>
                <button type="submit" name="salvarCadastro">Cadastrar</button>
            </p>
        </form>
        <h2>Lista de Retiradas</h2>
       

    </section>
    <footer>

    </footer>
</body>

</html>