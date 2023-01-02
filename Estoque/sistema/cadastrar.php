<?php
if (!isset($_POST['nome_produto']) || !isset($_POST['und_produto']) || !isset($_POST['qtd_produto']) || !isset($_POST['codigo_produto'])|| !isset($_POST['localizacao'])) {
    header('Location:index.php');
} else {

    $nome_produto = $_POST['nome_produto'];
    $und_produto = $_POST['und_produto'];
    $qtd_produto = $_POST['qtd_produto'];
    $codigo_produto = $_POST['codigo_produto'];
    $localizacao = $_POST['localizacao'];

    include_once '../database/produtos.dao.php';

    $result = salvar_produto($nome_produto, $und_produto, $qtd_produto, $codigo_produto, $localizacao);

    print($result);

    if ($result) {
        header('location:index.php?msg=cadastrado');
    } else {
        header('location:index.php?msg=errocadastro');
    }

}

?>