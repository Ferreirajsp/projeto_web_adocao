<?php
$servidor = "localhost";
$username = "usuário";
$password = "senha";
$db = "cadastro";

$conn = new mysqli($servidor, $username, $password, $db);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$conn->close();
?>