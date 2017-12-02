<?php

define('IV_SIZE', mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));




if ($_POST['tipo_criptografia'] == 1) {
    include $root . 'controller/cesar.php';
    if ($_POST['metodo'] == 1) {
        echo cesar($_POST['cifrar'], +10);
    } else {
        echo cesar($_POST['descifrar'], -10);
    }
} elseif ($_POST['tipo_criptografia'] == 2) {
    
    include $root . 'controller/aes256.php';
    
    //$chave = "secret-key-is-secret";

    if ($_POST['metodo'] == 1) {
        echo encrypt($key, $_POST['cifrar']);
    } else {
        echo decrypt($key, $_POST['descifrar']);
    }
} else {
   // include $root . 'controller/rc4.php';

   
}
