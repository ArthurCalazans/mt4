<?php

if ($_POST['tipo_hash'] == 1) {
    $hash1 = hash('sha512', $_POST['hash1']);
    $hash2 = hash('sha512', $_POST['hash2']);
} else {
    $hash1 = hash_hmac('ripemd160', $_POST['hash1'], $_POST['chave']);
    $hash2 = hash_hmac('ripemd160', $_POST['hash2'], $_POST['chave']);
}
$comparacao = (hash_equals($hash1, $hash2));
echo json_encode(["status" => $comparacao]);
?>