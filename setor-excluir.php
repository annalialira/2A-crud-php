<?php
include_once './_conexao.php';
include_once './_header.php';

$id = $_GET["id"];
$sql = "DELETE FROM setor WHERE SetorID = ".$id;
$resultado = mysqli_query($conexao, $sql);

// faz o redirecionamento
header("Location: ./setor-lista.php", true, 302);
exit();
?>