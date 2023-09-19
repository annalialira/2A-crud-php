<?php
// inclusao de arquivos base
include_once './_conexao.php';
include_once './_header.php';
?>
<h1>Salvar Setor</h1>
<form action="./setor-acao.php" method="post">
    <input type="text" value="">
    <ul>
        <li>
            <label for="">Nome</label>
            <input type="text">
        </li>
        <li>
            <label for="">Andar</label>
            <input type="text">
        </li>
        <li>
            <label for="">Cor</label>
            <input type="text">
        </li>
        <li>
            <input type="submit" value="Cadastrar">
            <a href="./setor-lista.php">Voltar</a>
        </li>
    </ul>
</form>

$id = $_POST['id'];
$nome = $_POST['txtNome'];
$teto = $_POST['txtTeto'];
if( !empty($id) ){
    // update
    $sql = "UPDATE cargos SET Nome = '".$nome."', TetoSalarial=".$teto." WHERE CargoID = ".$id;
}else{
    $sql = "INSERT INTO cargos (Nome,TetoSalarial) VALUES('".$nome."',".$teto.");"
}
mysqli_query($sql)

<?php
if (count($_POST) > 0) {
    require_once __DIR__ . '/lib/DataSource.php';
    $database = new DataSource();
    $sql = "INSERT INTO users (signup_name,userName,firstName, lastName) VALUES (?,?,?,?)";
    $paramType = 'ssss';
    $paramValue = array(
        $_POST["signup-name"],
        $_POST["userName"],
        $_POST["firstName"],
        $_POST["lastName"]
    );
    $database->insert($sql, $paramType, $paramValue);
}
?>

<?php
// footer
include_once './_footer.php';
?>    