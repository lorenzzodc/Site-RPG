<?php
include("conexaoDB.php");
$nomeM = $_POST["nomeN"];
$pvM = $_POST["pvN"];
$acM = $_POST["acN"];
$raca= $_POST["raca"];
$desc= $_POST["descricao"];



if (isset($_FILES['arquivo2'])) {
    $extensao = strtolower(substr($_FILES['arquivo2']['name'], -4));
    $novoNome = md5(time()) . $extensao;
    $diretorio = "../public/";
    move_uploaded_file($_FILES['arquivo2']['tmp_name'], $diretorio . $novoNome);

    $sql = "INSERT INTO npc (nome,ac,pv,raça,descricao,imagem) VALUES ('$nomeM','$acM','$pvM','$raca','$desc','$novoNome')";


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
} else {
    echo "Erro,tente novamente";
}
