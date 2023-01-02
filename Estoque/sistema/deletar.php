<?php
    if (!isset($_GET['id_produto'])) {
        header('location:index.php');
    } else {
        $id_produto = $_GET['id_produto'];
        include_once '../database/produtos.dao.php';

        $result = deletar_produto($id_produto);

        if ($result) {
            header('location:index.php?msg=deletado');
        } else {
            header('location:index.php?msg=errodeletar');
        }
    }
?>