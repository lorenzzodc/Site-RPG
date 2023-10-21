<?php
include("conexaoDB.php");
$nomeM = $_POST["nomeM"];
$pvM = $_POST["pvM"];
$acM = $_POST["acM"];
$resistencia = $_POST["resistencia"];
$imunidade = $_POST["imunidade"];
$loot = $_POST["loot"];
$imagem = $_FILES['arquivo'];


if(isset($_FILES['arquivo']) && $_FILES['arquivo']['error']=== UPLOAD_ERR_OK){

    $pasta = "public/";

    $nomeDoArquivo=$imagem['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if($extensao !="jpg" && $extensao != "png"){
        die("Arquivo não suportado");
    }
    $path= $pasta . $novoNomeDoArquivo . "." . $extensao;
    
    $deu_certo = move_uploaded_file($imagem['tmp_name'],$path);
    
    if($deu_certo){
        
        $sql = "INSERT INTO monstros (nome,pv,ac,resistencias,imunidades,loot, nome_imagem,
    nome_imagem,path) VALUES ('$nomeM','$pvM','$acM','$resistencia','$imunidade','$loot','$novoNomeDoArquivo','$path')";
    
    
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
    }else{
        echo"Erro,tente novamente";
    }
}

?>

