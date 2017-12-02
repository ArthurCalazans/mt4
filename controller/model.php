<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'mt4';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno())
    trigger_error(mysqli_connect_error());

$mysqli->set_charset("utf8");
$mysqli->autocommit(FALSE);

if (isset($_GET['funcao'])) {
    if ($_GET['funcao'] == "cadastar") {
        include $root . "model/cadastrar.php";
    } elseif ($_GET['funcao'] == "status") {
        include $root . "model/status.php";
    } elseif ($_GET['funcao'] == "consultar") {
        include $root . "model/consultar.php";
    } elseif ($_GET['funcao'] == "editar") {
        include $root . "model/editar.php";
    }
} else {
    include $root . "model/consultar.php";
}