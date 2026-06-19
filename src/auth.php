<?php

require_once 'db.php';

$name = $_POST['userName'];
$pwd = $_POST['password'];
$userlvl = $_POST['level'];




// Tipo assim, isso daqui obviamente é basicamente você abrir uma porta para um SQL Injection, 
// mas pelo menos do meu lado eu não estou conseguindo usar o prepare & execute do PDO.

$userQuery = $pdo->query("SELECT * FROM public.usuarios WHERE nome = '$name'");

$userQueryResult = $userQuery->fetch();


if($name = $userQueryResult['nome'] && $pwd = $userQueryResult['senha']){
    session_start();
    $_SESSION['user'] = $name;
    $_SESSION['accessLevel'] = $userQueryResult['accesslevel'];
    switch ($_SESSION['accessLevel']) {
        case 1:
            header("location:clientePage.php");
            exit; 
        case 10:
            header("location:index.html");
            exit;
        default:
            header("location:index.html");
    }
}


?>
















































