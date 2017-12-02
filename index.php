<?php

$root = $_SERVER['DOCUMENT_ROOT'] . '/mt4/';

if (isset($_GET['page'])) {
    if (file_exists($root . 'controller/' . $_GET['page'] . '.php')) {
        include $root . 'controller/' . $_GET['page'] . '.php';
    } else {
        echo "ERRO";
    }
} else {
    include $root . 'controller/home.php';
}