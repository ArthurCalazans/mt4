<?php

$insert = "UPDATE cad_dispositivo SET ";
$insert .= "hostname        = '" . $_POST['hostname_alteracao'] . "',";
$insert .= "ip              = '" . $_POST['ip_alteracao'] . "',";
$insert .= "tipo            = '" . $_POST['tipo_alteracao'] . "',";
$insert .= "fabricante      = '" . $_POST['fabricante_alteracao'] . "',";
$insert .= "modelo          = '" . $_POST['modelo_alteracao'] . "'";
$insert .= " WHERE id_dispositivo = " . $_POST['id_dispositivo_alteracao'] . ";";

if($mysqli->query($insert)){
    $retorno = ["titulo"=>"Dispositivo Atualizado Com Sucesso", "mensagem"=>"", "status"=>true];
    $mysqli->commit();
}else{
    $retorno = ["titulo"=>"Algo Deu Errado", "mensagem"=>$mysqli->error, "status"=>false];
    $mysqli->rollback();
}
echo json_encode($retorno);