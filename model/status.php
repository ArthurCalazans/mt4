<?php

if (isset($_GET['par'])) {
    if ($_GET['par'] == 'ativar') {
        $atualizar = "UPDATE cad_dispositivo SET status='1' WHERE id_dispositivo='" . $_POST['id_dispositivo'] . "';";
    } else {
        $atualizar = "UPDATE cad_dispositivo SET status='0' WHERE id_dispositivo='" . $_POST['id_dispositivo'] . "';";
    }
    if (isset($atualizar)) {
        $resultado = $mysqli->query($atualizar);
        if ($resultado) {
            $mysqli->commit();
        } else {
            $mysqli->rollback();
        }
        echo json_encode(["status" => $resultado]);
    }
}