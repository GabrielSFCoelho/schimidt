<?php
include_once '../database/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body><?php
// Definimos o nome do arquivo que será exportado
$arquivo = 'produtos.xls';
$conn = conectar();
// Criamos uma tabela HTML com o formato da planilha
$html = '';
$html .= '<table border="1">';
$html .= '<tr>';
$html .= '<td colspan="5">Produtos</tr>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td><b>NOME</b></td>';
$html .= '<td><b>UND</b></td>';
$html .= '<td><b>QTD</b></td>';
$html .= '<td><b>CODIGO</b></td>';
$html .= '<td><b>LOCALIZAÇÃO</b></td>';
$html .= '</tr>';
//Selecionar todos os itens da tabela
$sql = "SELECT * FROM produtos_tb";
$result = mysqli_query($conn, $sql);
while ($row_produtos = mysqli_fetch_assoc($result)) {
    $html .= '<tr>';
    $html .= '<td>' . $row_produtos["nome_produto"] . '</td>';
    $html .= '<td>' . $row_produtos["und_produto"] . '</td>';
    $html .= '<td>' . $row_produtos["qtd_produto"] . '</td>';
    $html .= '<td>' . $row_produtos["codigo_produto"] . '</td>';
    $html .= '<td>' . $row_produtos["localizacao"] . '</td>';
    $html .= '</tr>';
    ;
}
$html .= '</table>';
// Configurações header para forçar o download
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-type: application/x-msexcel");
header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
header("Content-Description: PHP Generated Data");
echo $html;
exit;
?>
</body>

</html>