<?php
session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "123456";
$dbname = "cadastro";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (!$conexao) {
    die("Houve um erro: " . mysqli_connect_error());
}

$log = $_POST['logi'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (logi, senha)VALUES('$log', '$senha')";
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    $_SESSION['cadastro_success'] = true;
    header("Location: index.html");
} else {
    $_SESSION['cadastro_error'] = true;
    header("Location: cadastro.php");
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>
