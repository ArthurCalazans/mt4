<?php
function encrypt($key, $payload) {
    $iv = mcrypt_create_iv(IV_SIZE, MCRYPT_DEV_URANDOM);
    $crypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $payload, MCRYPT_MODE_CBC, $iv);
    $combo = $iv . $crypt;
    $garble = base64_encode($iv . $crypt);
    return $garble;
}

function decrypt($key, $garble) {
    $combo = base64_decode($garble);
    $iv = substr($combo, 0, IV_SIZE);
    $crypt = substr($combo, IV_SIZE, strlen($combo));
    $payload = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $crypt, MCRYPT_MODE_CBC, $iv);
    return $payload;
}

$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
?>