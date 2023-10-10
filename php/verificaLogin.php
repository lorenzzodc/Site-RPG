<?php

include("conexaoDB.php");
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];


$sql = "SELECT id, senha FROM usuarios WHERE nome = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    // Usuário encontrado, verifique a senha
    $stmt->bind_result($id, $hashed_password);
    $stmt->fetch();

    if (password_verify($senha, $hashed_password)) {
        // Senha correta, login bem-sucedido
        echo "<script language='javascript' type='text/javascript'>
            alert('Cadastro realizado com sucesso!');
            window.location.href='../paginas/interna.html';
            </script>";
        // Senha incorreta
        echo 'Login falhou. Verifique suas credenciais.';
    }
} else {
    // Nome de usuário não encontrado
    echo 'Login falhou. Verifique suas credenciais.';
}


// Feche a conexão com o banco de dados
$stmt->close();
$conn->close();
?>