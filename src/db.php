<?php
$host = '127.0.0.1';
$db   = 'serviteclagos';
$db_user = 'postgres';
$db_senha = '1234';
$port = '5432';

$dsn = "pgsql:host=$host;port=$port;dbname=$db";


$pdo = new PDO($dsn, $db_user, $db_senha);

?>