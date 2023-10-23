<?php
include("conexaoDB.php");
$nomeM = $_POST["nomeM"];
$pvM = $_POST["pvM"];
$acM = $_POST["acM"];
$resistencia = $_POST["resistencia"];
$imunidade = $_POST["imunidade"];
$loot = $_POST["loot"];
$imagem = $_FILES['arquivo'];


if (isset($_FILES['arquivo'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novoNome = md5(time()) . $extensao;
    $diretorio = "../public/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novoNome);

    $sql = "INSERT INTO monstros (nome,pv,ac,resistencias,imunidades,loot, nome_imagem) VALUES ('$nomeM','$pvM','$acM','$resistencia','$imunidade','$loot','$novoNome')";


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
?>