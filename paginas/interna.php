<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/menu2.css">
    <link rel="stylesheet" href="../css/corpo.css">
    <link rel="stylesheet" href="../css/interna.css">
    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
    <script src="../js/scrpits.js"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <section>
            <nav>
                <div class="topnav" id="myTopnav">
                    <a href="../index.php" class="active"> Sair</a>
                    <a href="Deuses e Divindades.php">Deuses e Divindades</a>
                    <a href="história do mundo.php">História do Mundo</a>
                    <a href="Mapa Interativo.php">Mapa Interativo</a>
                    <a href="Bestiario.php">Bestiário</a>
                    <a href="Politica e Faccoes.php">Política e Facções</a>
                    <a href="Rastreiador de NPCs.php">Rastreiador de NPC</a>
                    <a href="Sociedade.php">Sociedade</a>
                    <a><?php
                        if (isset($_SESSION['nome_usu_sessao'])) {
                            echo "<a href='interna.php'>Interna</a>";
                        } else {
                        }
                        if (isset($_GET['logout'])) {
                            session_destroy();
                            header("location:../index.php");
                        }

                        ?></a>
                    <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction()">
                        &#9776;
                    </a>

                </div>
            </nav>
        </section>
        <section>
            <h6>Criar monstro</h6>
            <form action="Processa_Monstro.php" method="post" enctype="multipart/form-data">
                <label for="nome">Nome do Monstro:</label><br>
                <input type="text" name="nomeM" required>
                <br>

                <label for="pv">Pontos de Vida (PV):</label><br>
                <input type="number" name="pvM" required>
                <br>

                <label for="ac">Classe de Armadura (AC):</label><br>
                <input type="number" name="acM" required>
                <br>

                <label>Resistências do Monstro: <br>
                    <input type="text" name="resistencia">
                </label>
                <br>

                <label>Imunidades do Monstro:
                    <br>
                    <input type="text" name="imunidade">

                </label>
                <br><br>

                <label class="input-personalizado">
                    <span class="botao-selecionar">Selecione a imagem: <br><br></span>
                    <img class="imagem" /><br>
                    <input type="file" class="input-file" accept="image/*" name="arquivo"><br>
                </label><br>
                <label for="loot">Loot:</label><br><br>
                <textarea type="text" id="loot" name="loot" maxlength="255" rows="4" cols="40"></textarea>
                <br><br>

                <input type="submit" value="Criar Monstro">
            </form>

            <h6>Criação de NPC</h6>
            <form action="processa_NPC.php" method="post">
                <label for="nome">Nome do NPC:</label> <br>
                <input type="text" id="nome" name="nomeN" required>
                <br><br>

                <label for="ac">Classe de Armadura (AC):</label> <br>
                <input type="number" id="ac" name="acN" required>
                <br><br>

                <label for="pv">Pontos de Vida (PV):</label> <br>
                <input type="number" id="pv" name="pvN" required>
                <br><br>

                <label for="raca">Raça do NPC:</label> <br>
                <input type="text" id="raca" name="raca"><br><br>
                <label for="descricao">Descrição:</label><br><br>
                <textarea id="descricao" name="descricao" rows="4" cols="40" maxlength="500"></textarea>
                <br><br>

                <input type="submit" value="Criar NPC">
            </form>

        </section>
    </header>
</body>
<script>
    const $ = document.querySelector.bind(document);

    const previewImg = $('.imagem');
    const fileChooser = $('.input-file');

    fileChooser.onchange = e => {
        const fileToUpload = e.target.files.item(0);
        const reader = new FileReader();
        reader.onload = e => previewImg.src = e.target.result;
        reader.readAsDataURL(fileToUpload);
    };

       
</script>

</html>