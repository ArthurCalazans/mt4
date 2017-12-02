<?php

$insert = "INSERT INTO cad_dispositivo SET ";
$insert .= "hostname        = '" . $_POST['hostname'] . "',";
$insert .= "ip              = '" . $_POST['ip'] . "',";
$insert .= "tipo            = '" . $_POST['tipo'] . "',";
$insert .= "fabricante      = '" . $_POST['fabricante'] . "',";
$insert .= "modelo          = '" . $_POST['modelo'] . "',";
$insert .= "status          = '0',";
$insert .= "dta_cadastro    = now();";

if($mysqli->query($insert)){
    $retorno = ["titulo"=>"Dispositivo Cadastrado Com Sucesso", "mensagem"=>"Você deseja cadastrar outro dispositivo?", "status"=>true];
    $mysqli->commit();
}else{
    $retorno = ["titulo"=>"Algo Deu Errado", "mensagem"=>$mysqli->error, "status"=>false];
    $mysqli->rollback();
}
echo json_encode($retorno);