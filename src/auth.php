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
    $_SESSION['user'] = $name;
    $_SESSION['accessLevel'] = $userlvl;
    switch ($userlvl) {
        case 1:
            header("location:clientPage.php");
            exit; 
        case 10:
            header("location:home.html");
            exit;
        default:
            header("location:home.html");
    }
}


?>
















































