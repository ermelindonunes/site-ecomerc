<?php 
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