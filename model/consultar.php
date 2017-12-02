<?php

if (isset($_POST['id_dispositivo'])) {
    $consulta = 'SELECT * FROM cad_dispositivo where id_dispositivo = "' . $_POST['id_dispositivo'] . '"';
    $resultado = $mysqli->query($consulta);
    $linha = $resultado->fetch_array();
    echo json_encode($linha);
} else {
    $consulta = 'SELECT * FROM cad_dispositivo';
    $resultado = $mysqli->query($consulta);
}
