<?php

//Código de error
// 1 = Sem  nível de acesso disponível. Má inicialização da Session.
// 2 = SESSION não encontrada/ Não Iniciada.


function sessionVerifier(int $x)
{

  session_start();

  if (!isset($_SESSION['user'])) {
    header('location:index.html?error=2');
    exit;
  } elseif (($_SESSION['accessLevel'] < $x) or (!isset($_SESSION['accessLevel']))) {
    header('location:index.html?error=1');
    exit;
  }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>