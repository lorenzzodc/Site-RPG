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
    <link rel="stylesheet" href="../css/politica e faccoes.css">
    <link rel="stylesheet" href="../css/corpo.css">
    <script src="../js/scrpits.js"></script>

    <title>Calen Emyn</title>
</head>

<body>
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
                <a href="#2">Pacto Unificado</a>
                <a href="#3">Pacto do Tomo</a>
                <a href="#4"> O Conselho</a>
                <a href="#5">Cavaleiros de Apharel</a>
                <a href="#6">Submundo</a>
                <a href="#7"> Caçadores</a>
                <a href="#8">Filhos de Aranthir</a>
                <a href="#9">Irmandade Sombria</a>
                <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction2()">
                    &#9776;
                </a>

            </div>
        </nav>
    </section>
    <section>
        <br>
        <div>
            <h1 id="1">POLITICA E FACÇÕES</h1>
            <p class="p-titulo">Após a queda do Reino Élfico, as cidades emergiram como entidades independentes,
                acolhendo todas as raças
                e
                povos em suas terras. Contudo, o medo da magia permeou o mundo e dividiu a população em dois grupos
                antagônicos.
            </p>
            <h2 id="2">Pacto das Terras Unificadas</h2>
            <div class="texto">
                <div>
                    <p>Sob o estandarte do Pacto das Terras Unificadas, as cidades-estado se unem numa poderosa aliança,
                        buscando
                        fortalecer suas defesas e controlar a magia. A Ordem dos Cavaleiros de Apharel é encarregada de
                        conter o
                        uso
                        desenfreado da magia, chegando ao extremo de capturar crianças com potencial mágico para serem
                        controladas.
                    </p>
                </div>
                <div>
                    <img src="../imagens/bandeira vermelha.png" alt="bandeira vermelha" title="Bandeiras Vermelhas">
                </div>
            </div>
            <h2 id="3">Pacto do Tomo</h2>
            <div class="texto">
                <div>
                    <p>Sob o Pacto do Tomo, as cidades-estado valorizam a pesquisa controlada da Magia Sagrada e
                        Natural. Os
                        Cavaleiros de Apharel atuam como protetores dos detentores desses conhecimentos, ensinando-os a
                        dominar seus
                        poderes e utilizá-los em benefício das cidades do pacto.
                    </p>
                </div>
                <div>
                    <img src="../imagens/bandeira azul.png" alt="">
                </div>
            </div>
            <h2 id="4">Conselho de Emyn</h2>
            <div class="texto">
                <div>
                    <p>A Ilha Neutra, um território intermediário, é o local de encontro dos conselhos de ambos os
                        pactos,
                        onde
                        negociações e tratados são realizados em busca de interesses comuns.
                    </p>
                </div>
                <div>
                    <img src="../imagens/bandeira cinza.png" alt="">
                </div>
            </div>
            <h2 id="5">A Ordem dos Cavaleiros de Apharel</h2>
            <div class="texto">
                <div>
                    <p>Fundada na época da queda do império élfico, esta ordem sagrada se dedica a controlar e
                        investigar
                        incidentes
                        mágicos. Seus membros fazem um voto de fidelidade e são divididos em dois grupos: Norte e Sul. O
                        Norte é
                        responsável pelo treinamento e segurança dos aptos em magia, enquanto o Sul foca no controle e
                        subjugação da
                        magia nas cidades. Possuem uma rivalidade marcante com a Ordem dos Caçadores, com quem trabalham
                        relutantemente em algumas ocasiões.
                    </p>
                </div>
                <div>
                    <img src="../imagens/Cavaleiros de Apharel.png" alt="">
                </div>
            </div>
            <h2 id="6">Guilda do Submundo</h2>
            <div class="texto">
                <div>
                    <p>A sombria Guilda do Submundo controla o mercado negro, envolvendo-se em tráfico de itens mágicos
                        e
                        até mesmo
                        de seres humanos. Sua influência e discrição tornam-na extremamente difícil de ser infiltrada, e
                        a
                        guarda
                        muitas vezes fecha os olhos para suas atividades, seja por suborno ou temor.
                    </p>
                </div>
                <div>
                    <img src="../imagens/guilda do submundo.png" alt="">
                </div>
            </div>
            <h2 id="7">Ordem dos Caçadores</h2>
            <div class="texto">
                <div>
                    <p>Muito se debate sobre a origem da Ordem dos Caçadores, mas pouco se sabe com certeza. Essa
                        misteriosa
                        facção
                        emprega conhecimentos em magia profana para caçar bestas e criaturas mágicas. Dividem-se em três
                        grupos
                        especializados: Caçadores de Bestas, Caçadores de Espectros e a Escola dos Mutantes.
                    </p>
                </div>
                <div><img src="../imagens/ordem dos caçadores.png" alt=""></div>
            </div>
            <h2 id="8">Filhos de Aranthir</h2>
            <div class="texto">
                <div>
                    <p>Este grupo paramilitar, formado principalmente por elfos, anseia pela restauração do antigo
                        Império
                        Élfico.
                        Desprezam outras raças, considerando-as inferiores, e almejam o retorno do domínio élfico sobre
                        o
                        mundo.
                    </p>
                </div>
                <div><img src="../imagens/Filhos de Aranthir.png" alt=""></div>
            </div>
            <h2 id="10">Irmandade Sombria </h2>

            <div class="texto">
                <div>
                    <p>Uma sociedade secreta especializada em assassinatos, cujos contratos são firmados por meio de
                        magia
                        de
                        sangue. Seus métodos de recrutamento permanecem envoltos em mistério.
                    </p>
                </div>
                <div><img src="../imagens/irmandade sombria.png" alt=""></div>
            </div>

        </div>
    </section>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        function myFunction2() {
            var x = document.getElementById("myTopnav2");
            if (x.className === "topnav2") {
                x.className += " responsive";
            } else {
                x.className = "topnav2";
            }
        }
    </script>
</body>


</html>