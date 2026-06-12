

<?php 

//Código de error
// 1 = Sem  nível de acesso disponível. Má inicialização da Session.
// 2 = SESSION não encontrada/ Não Iniciada.


function sessionVerifier(){}

//Código de error
// 1 = Sem  nível de acesso disponível. Má inicialização da Session.
// 2 = SESSION não encontrada/ Não Iniciada.

session_start();

if(!isset($_SESSION['user'])){
    header('location:index.html?error=2');
    exit;
} elseif (($_SESSION['accessLevel'] < 1) or (!isset($_SESSION['accessLevel']))){
    header('location:index.html?error=1');
    exit;
}

?>