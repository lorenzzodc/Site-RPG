<?php
$host = "localhost";
$user = "root";
$password = "";
$banco = "logar";

$conn = new mysqli($host, $user, $password, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . mysqli_connect_error());
}

echo "Conectado ao banco de dados com sucesso!";



?>