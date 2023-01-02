<?php
include_once 'conn.php';

function salvar_produto($nome_produto, $und_produto, $qtd_produto, $codigo_produto, $localizacao)
{
    $conn = conectar();
    $sql = "INSERT INTO produtos_tb (nome_produto, und_produto, qtd_produto, codigo_produto, localizacao) VALUES ('$nome_produto', '$und_produto', '$qtd_produto', '$codigo_produto', '$localizacao')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {

        return true;
    }
    return false;
}


function buscar_produtos()
{
    $conn = conectar();
    $sql = "SELECT * FROM produtos_tb";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        return $result;
    }
    return null;
}
function exibir_produtos()
{
    $result = buscar_produtos();
    if ($result == null) {
        $retorno = '<h3>Não há produtos cadastrados</h3>';
    } else {
        $retorno = '<table class="table table-striped text-center">';
        $retorno .= '<tr>';
        $retorno .= '<th scope="col">ID#</th>';
        $retorno .= '<th scope="col">NOME</th>';
        $retorno .= '<th scope="col">UND</th>';
        $retorno .= '<th scope="col">QTD</th>';
        $retorno .= '<th scope="col">CODIGO</th>';
        $retorno .= '<th scope="col">LOCALIZAÇÃO</th>';
        $retorno .= '<th scope="col">Deletar</th>';
        $retorno .= '<th scope="col">Editar</th>';
        $retorno .= '</tr>';
        while ($produto = mysqli_fetch_assoc($result)) {
            $retorno .= '<tr>';
            $retorno .= "<td>" . $produto['id_produto'] . "</td>";
            $retorno .= "<td>" . $produto['nome_produto'] . "</td>";
            $retorno .= "<td>" . $produto['und_produto'] . "</td>";
            $retorno .= "<td>" . $produto['qtd_produto'] . "</td>";
            $retorno .= "<td>" . $produto['codigo_produto'] . "</td>";
            $retorno .= "<td>" . $produto['localizacao'] . "</td>";
            $retorno .= "<td>" . link_deletar($produto['id_produto']) . "</td>";
            $retorno .= "<td>" . link_editar($produto['id_produto']) . "</td>";
            $retorno .= '</tr>';
        }
        $retorno .= '</table>';

    }
    return $retorno;

}

function link_deletar($id_produto)
{
    $link = '<a href="deletar.php?id_produto=' . $id_produto . '"
    onclick="return confirm(\'Tem certeza que deseja excluir este produto?\')" class="btn btn-danger">Deletar</a>';

    return $link;
}

function link_editar($id_produto)
{
    $link = '<a href="editar.php?id_produto=' . $id_produto . '" class="btn btn-warning">Editar</a>';

    return $link;
}


function deletar_produto($id_produto)
{
    $conn = conectar();
    $sql = "DELETE FROM produtos_tb WHERE id_produto = $id_produto";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        return true;
    }
    return false;
}


function buscar_produto($id_produto)
{
    $conn = conectar();
    $sql = "SELECT * FROM produtos_tb WHERE id_produto = $id_produto";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        return $result;
    }
    return null;
}

function editar_produto($id_produto, $nome_produto, $und_produto, $qtd_produto, $codigo_produto, $localizacao)
{
    $conn = conectar();
    $sql = "UPDATE produtos_tb SET nome_produto = '$nome_produto', und_produto = '$und_produto', qtd_produto = '$qtd_produto', codigo_produto = '$codigo_produto', localizacao = '$localizacao' 
        WHERE id_produto = $id_produto";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        return true;
    }
    return false;
}

?>