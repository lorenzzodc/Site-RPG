<?php
include ("conexaoDB.php");
include ("usuario.class.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

          $u = new Usuario();
          $u->setNome($nome);
          $u->setEmail($email);
          $u->setSenha($senhaHash);

          $sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('".$u->getNome()."','".$u->getEmail()."','".$u->getSenha()."')";
          
          
          
          if ($conn->query($sql) === true) {
            echo "<script language='javascript' type='text/javascript'>
            alert('Cadastro realizado com sucesso!');
            window.location.href='../paginas/login.html';
            </script>";
            die();
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
            echo "<br>";
            echo "Não foi possivel realizar o 
        cadastro!";
        }
        $conn->close();


?>