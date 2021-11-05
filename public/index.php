<?php
session_start();

require_once '../autoload.php';

switch ($_SERVER['PATH_INFO']) {
    case '/login':
        require_once '../src/View/login.php';
        break;
    default:
        echo "Erro 404";
        break;
}

?>