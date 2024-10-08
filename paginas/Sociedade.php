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
    <link rel="stylesheet" href="../css/sociedade.css">
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
                <div class="dropdown">
                    <button id="myBtn" class="dropbtn" onclick="myFunction3()">
                        Raças
                    </button>
                    <div id="myDropdown" class="dropdownsub">
                        <a href="#0">Aasimares</a>
                        <a href="#1">Anões</a>
                        <a href="#2">Centauros</a>
                        <a href="#3">Changelings</a>
                        <a href="#4">Dhampirs</a>
                        <a href="#5">Drows</a>
                        <a href="#6">Draconatos</a>
                        <a href="#7">Elfos</a>
                        <a href="#8">Gnomos</a>
                        <a href="#9">Goblins</a>
                        <a href="#10">Goliaths</a>
                        <a href="#11">Halflings</a>
                        <a href="#12">Humanos</a>
                        <a href="#13">Kenku</a>
                        <a href="#14">Leoninos</a>
                        <a href="#15">Loxodontes</a>
                        <a href="#16">Minotauros</a>
                        <a href="#17">Orcs</a>
                        <a href="#18">Povo Lagarto</a>
                        <a href="#19">Shadar-kai</a>
                        <a href="#20">Shifter</a>
                        <a href="#21">Sátiro</a>
                        <a href="#22">Tebaxi</a>
                        <a href="#23">Thri-kreen</a>
                        <a href="#24">Tiefling</a>
                        <a href="#25">Tritão</a>
                    </div>
                </div>
                    
                <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction2()">
                    &#9776;
                </a>

            </div>
        </nav>
    </section>
    <section>
        <br>
        <h1>Sociedade</h1>
        <p>A sociedade de Emyn é um mosaico de raças e culturas, onde a convivência pacífica é uma realidade, embora
            estereótipos ainda persistam. A demarcação política é pouco estruturada, e o mundo é compartilhado por
            todos, embora conflitos armados entre cidades sejam raros, mas não inexistentes. Os pactos foram
            estabelecidos para evitar conflitos desnecessários, mas, ocasionalmente, escaramuças acontecem.
        </p>
        <h2 id="0">Raças</h2>
        <h3>Aasimares</h3>
        <div class="texto">
            <div>
                <p id="1">Aasimars são seres de natureza celestial, com traços humanos e toques de divindade, muitas
                    vezes possuindo asas ou um brilho celestial. Eles são guiados por um propósito nobre e podem ser
                    encontrados em várias culturas, agindo como defensores do bem.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Aasimar-5e.webp" alt=""></a>
            </div>
        </div>
        <h3>Anões</h3>
        <div class="texto">
            <div>
                <p id="2">Os anões são uma raça robusta e resistente, conhecidos por sua habilidade em trabalhos de
                    metalurgia e engenharia. Eles valorizam a honra, a tradição e a lealdade, vivendo em sociedades
                    fortemente estruturadas dentro de montanhas ou cidades subterrâneas.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/anao.jpg" alt=""></a>
            </div>
        </div>
        <h3>Centauros</h3>
        <div class="texto">
            <div>
                <p id="3"> Centauros são criaturas místicas com o corpo de um cavalo e o torso superior de um
                    humano. Eles são hábeis caçadores e guerreiros, muitas vezes vivendo em harmonia com a natureza
                    e demonstrando uma conexão profunda com o mundo natural.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/centauro.png" alt=""></a>
            </div>
        </div>
        <h3>Changelings</h3>
        <div class="texto">
            <div>
                <p id="4"> Changelings são mestres da metamorfose, capazes de alterar sua aparência para se assemelharem
                    a outras criaturas. Eles frequentemente se envolvem em espionagem, atuação ou outras profissões que
                    exigem disfarce, e podem ter dificuldade em construir identidades estáveis.

                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/changeling.jfif" alt=""></a>
            </div>
        </div>
        <h3>Dhampirs</h3>
        <div class="texto">
            <div>
                <p id="5"> Dhampirs são descendentes de vampiros, possuindo traços vampíricos como a sensibilidade à luz
                    solar. Eles frequentemente lidam com uma dualidade entre sua herança sombria e um desejo de se
                    encaixar na sociedade, usando suas habilidades únicas para caçar criaturas das trevas.

                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/damphir.png" alt=""></a>
            </div>
        </div>
        <h3>Drows</h3>
        <div class="texto">
            <div>
                <p id="6"> Os drows são elfos subterrâneos conhecidos por sua pele escura e habilidades mágicas. Eles
                    vivem em sociedades complexas sob a superfície, muitas vezes em conflito com outras raças, e têm uma
                    relação complicada com suas divindades, os deuses das trevas.

                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Drow.png" alt=""></a>
            </div>
        </div>
        <h3>Draconatos</h3>
        <div class="texto">
            <div>
                <p id="7"> Os draconatos são descendentes de dragões, exibindo características de seus ancestrais como
                    escamas e habilidades de sopro. Cada draconato herda traços diferentes com base na linhagem do
                    dragão, e eles frequentemente se esforçam para honrar sua herança mítica.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/draconaco.jfif" alt=""></a>
            </div>
        </div>
        <h3>Elfos</h3>
        <div class="texto">
            <div>
                <p id="8"> Elfos são seres graciosos e imortais que possuem uma afinidade natural com a magia e a
                    natureza. Divididos em várias sub-raças, eles valorizam a beleza, a criatividade e muitas vezes têm
                    visões profundas sobre o mundo devido à sua longa vida.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/elfo.jfif" alt=""></a>
            </div>
        </div>
        <h3>Gnomos</h3>
        <div class="texto">
            <div>
                <p id="9"> Gnomos são seres pequenos, curiosos e engenhosos, conhecidos por sua paixão por invenções e pela magia ilusória. Eles vivem em comunidades vibrantes e geralmente têm um senso de humor peculiar, buscando alegria na vida cotidiana.

                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/gnomo.jfif" alt=""></a>
            </div>
        </div>
        <h3>Goblins</h3>
        <div class="texto">
            <div>
                <p id="10">Goblins são criaturas pequenas e ágeis, frequentemente consideradas como bandidos ou trapaceiros. Apesar disso, eles possuem uma astúcia inata e podem encontrar maneiras criativas de superar desafios. Alguns goblins, no entanto, buscam redenção e uma vida mais honrosa.

                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/goblin.webp" alt=""></a>
            </div>
        </div>
        <h3>Goliaths</h3>
        <div class="texto">
            <div>
                <p id="11"> Os goliaths são uma raça de gigantes de montanha, conhecidos por sua força física e habilidades em ambientes inóspitos. Eles têm uma cultura centrada na competição e na superação de desafios naturais, valorizando a coragem e a resistência
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Goliath.jpg" alt=""></a>
            </div>
        </div>
        <h3>Halflings</h3>
        <div class="texto">
            <div>
                <p id="12">  Halflings são seres pequenos e alegres, que valorizam a paz, a comunidade e a boa comida. Eles têm um espírito aventureiro e muitas vezes procuram aproveitar a vida ao máximo, mesmo em meio a perigos e desafios.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Halfling.jfif" alt=""></a>
            </div>
        </div>
        <h3>Humanos</h3>
        <div class="texto">
            <div>
                <p id="13">  Humanos são a raça mais comum e diversificada, adaptando-se facilmente a várias culturas e estilos de vida. Sua versatilidade e curiosidade natural os levam a desempenhar papéis variados na sociedade, sendo encontrados em todas as partes do mundo.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Humano.webp" alt=""></a>
            </div>
        </div>
        <h3>Kenku</h3>
        <div class="texto">
            <div>
                <p id="14">   Os kenkus são avianos humanoides que não podem falar originalmente, mas em vez disso imitam sons e vozes. Eles têm uma cultura baseada em tradições orais e são frequentemente vistos como ladrões habilidosos ou artistas consumados.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Kenku.webp" alt=""></a>
            </div>
        </div>
        <h3>Leoninos</h3>
        <div class="texto">
            <div>
                <p id="15">   Os leoninos são humanoides com traços de leão, possuindo coragem, honra e uma forte conexão com o orgulho e a liderança. Eles geralmente têm uma mentalidade guerreira e são respeitados por sua força e determinação.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Leonino.webp" alt=""></a>
            </div>
        </div>
        <h3>Loxodontes</h3>
        <div class="texto">
            <div>
                <p id="16"> Os loxodontes são seres humanoides com características de elefante, conhecidos por sua sabedoria, paciência e força. Eles têm uma afinidade com a natureza e muitas vezes são vistos como líderes sábios em suas comunidades.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Loxodonte.png" alt=""></a>
            </div>
        </div>
        <h3>Minotauros</h3>
        <div class="texto">
            <div>
                <p id="17"> Minotauros são seres com corpo humano e cabeça de touro, frequentemente associados a lendas de labirintos. Eles possuem uma natureza feroz e uma forte ética de honra, muitas vezes se destacando como guerreiros habilidosos.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Minotauro.png" alt=""></a>
            </div>
        </div>
        <h3>Orcs</h3>
        <div class="texto">
            <div>
                <p id="18"> Orcs são uma raça de guerreiros robustos e agressivos, muitas vezes retratados como bárbaros. Apesar de sua reputação de brutalidade, eles também têm uma cultura rica e complexa, valorizando a força e a lealdade.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Orcs.webp" alt=""></a>
            </div>
        </div>
        <h3>Povo Lagarto</h3>
        <div class="texto">
            <div>
                <p id="19"> Os povos lagarto, ou lizardfolk, são criaturas semelhantes a lagartos, que valorizam a adaptação e a sobrevivência. Eles têm uma abordagem pragmática à vida, geralmente mantendo-se distantes das preocupações humanas.
                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/povo lagarto.webp" alt=""></a>
            </div>
        </div>
        <h3>Shadar-kai</h3>
        <div class="texto">
            <div>
                <p id="20">  Os shadar-kai são elfos das sombras que têm uma conexão única com o Plano das Sombras. Eles são muitas vezes melancólicos, mas também possuem uma força interior profunda e uma compreensão única da morte e do renascimento                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Shadar-kai.jfif" alt=""></a>
            </div>
        </div>
        <h3>Shifter</h3>
        <div class="texto">
            <div>
                <p id="21"> Os shifters são uma raça que pode alternar entre sua forma natural e uma forma mais bestial. Eles possuem uma conexão profunda com seus instintos animais, o que os torna hábeis caçadores, rastreadores e guerreiros.
                </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Shifter.jfif" alt=""></a>
            </div>
        </div>
        <h3>Sátiro</h3>
        <div class="texto">
            <div>
                <p id="22"> Os sátiros são seres metade humanos, metade bodes, conhecidos por sua natureza alegre, amor pela música e pelas artes. Eles muitas vezes se envolvem em festividades e celebrações, trazendo alegria por onde passam.
                </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Sátiro.webp" alt=""></a>
            </div>
        </div>
        <h3>Tebaxi</h3>
        <div class="texto">
            <div>
                <p id="23"> Os Tabaxi são seres humanoides que lembram leopardos em sua aparência, exibindo pelagem manchada e características felinas. Originários de ambientes selvagens, eles são conhecidos por sua agilidade, reflexos rápidos e curiosidade inata.
                </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Tebaxi.png" alt=""></a>
            </div>
        </div>
        <h3>Thri-kreen</h3>
        <div class="texto">
            <div>
                <p id="24"> Os thri-kreen são criaturas insectoides ágeis, com corpos semelhantes a insetos e pernas articuladas. Originários de climas áridos, eles são notáveis por suas habilidades de combate naturais e velocidade. Nômades por natureza, possuem forte conexão com a natureza, valorizando a liberdade e harmonia ambiental.
                </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Thri-kreen.jfif" alt=""></a>
            </div>
        </div>
        <h3>Tiefling</h3>
        <div class="texto">
            <div>
                <p id="25"> Tieflings são descendentes de humanos e demônios, possuindo traços demoníacos como chifres, cauda e pele avermelhada. Eles muitas vezes enfrentam preconceito devido à sua herança, mas também podem usar suas características únicas para alcançar poder e influência.
                </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Tiefling.webp" alt=""></a>
            </div>
        </div>
        <h3>Tritão</h3>
        <div class="texto">
            <div>
                <p id="26"> Os tritões são seres aquáticos com características semelhantes a peixes, vivendo nas profundezas dos oceanos. Eles possuem uma afinidade natural com a água e frequentemente desempenham papéis de guardiões dos mares.
                </div>
            <div>
                <img class="miniatura" src="../imagens/raças/Tritão.jfif" alt=""></a>
            </div>
        </div>
        
    </section>

</body>

</html>