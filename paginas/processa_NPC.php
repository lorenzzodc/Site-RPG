<?php
include("conexaoDB.php");
$nomeM = $_POST["nomeN"];
$pvM = $_POST["pvN"];
$acM = $_POST["acN"];
$raca= $_POST["raca"];
$desc= $_POST["descricao"];


    $sql = "INSERT INTO npc (nome,ac,pv,raça,descricao) VALUES ('$nomeM','$acM','$pvM','$raca','$desc')";

if ($conn->query($sql) === true) {
    echo "<script language='javascript' type='text/javascript'>
    alert('Monstro realizado com sucesso!');
    window.location.href='interna.php';
    </script>";
    die();
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
    echo "<br>";
    echo "Não foi possivel realizar o cadastro!";
}

?>
