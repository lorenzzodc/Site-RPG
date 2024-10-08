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
    <link rel="stylesheet" href="../css/NPC.css">
    <script src="../js/scrpits.js"></script>

    <title>Calen Emyn</title>
</head>

<body>
    <main>
        <header>
            <section>
                <nav>
                    <div class="topnav" id="myTopnav">
                        <a href="../index.php" class="active"> inicio</a>
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
        </header>
        <section>
            <nav>
                <div class="topnav2" id="myTopnav2">
                    <?php
                    if (isset($_SESSION['nome_usu_sessao'])) {
                        echo "<a href='../index.php?logout' class='active2'>| sair |</a>";
                    } else {
                        echo "<a href=login.php class='active2'>login</a>";
                    }
                    if (isset($_GET['logout'])) {
                        session_destroy();
                        header("location:index.php");
                    }

                    ?>
                    <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction2()">
                        &#9776;
                    </a>

                </div>
            </nav>
        </section>
        <section>
            <table>
                <thead>
                    <th>Imagem</th>
                    <th>nome</th>
                    <th>AC</th>
                    <th>PV</th>
                    <th>Resistências</th>
                    <th>Imunidades</th>
                    <th>Fraquezas</th>
                    <th>Loot</th>
                    
                </thead>
                <tbody>
                    <?php
                    include "conexaoDB.php";
                    $query = "Select nome,pv,ac,resistencias,imunidades,fraquezas,loot,nome_imagem from monstros";
                    $data = mysqli_query($conn, $query);
                    if ($data) {
                        while ($linha = mysqli_fetch_assoc($data)) {
                    ?>
                            <tr>

                                <td><img class="imagem" src="<?php echo $linha["nome_imagem"]; ?>"></td>
                                <td><?php echo $linha["nome"]; ?></td>
                                <td><?php echo $linha["ac"]; ?></td>
                                <td><?php echo $linha["pv"]; ?></td>
                                <td><?php echo $linha["resistencias"]; ?></td>
                                <td><?php echo $linha["imunidades"]; ?></td>
                                <td><?php echo $linha["fraquezas"]; ?></td>
                                <td><?php echo $linha["loot"]; ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
        </section>
    </main>
</body>

</html>