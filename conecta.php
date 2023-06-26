<?php

$host = "localhost";
$user = "root";
$password = "";
$banco = "marce";

$conn = new mysqli($host, $user, $password, $banco);

/* Checa a conexão*/
if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $$conn->connect_errno);
    exit();
}

?>