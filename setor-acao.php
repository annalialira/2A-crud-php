<?php
include_once './_conexao.php';

$nome = $_POST['nome'];
$andar = $_POST['andar'];
$cor = $_POST['cor'];

if(!empty($id)){
    $sql = "UPDATE setor SET nome = '', andar = '', cor = ''";
}else{
    $sql = "INSERT setor SET nome = '', andar = '', cor = '', id''";
}
mysqli_query($sql);


// faz o redirecionamento
header("Location: ./setor-lista.php", true, 302);
exit();
?>