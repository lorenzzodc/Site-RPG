<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/menu2.css">
    <link rel="stylesheet" href="../css/mapa interativo.css">
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
                    <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction()">
                        &#9776;
                    </a>
                </div>
            </nav>
        </section>
        <section>
            <nav>
                <div class="topnav2" id="myTopnav2">
                    <a href="login.php" class="active2">
                        login</a>
                    <div class="dropdown">
                        <button id="myBtn" class="dropbtn" onclick="myFunction3()">
                            Cidades
                        </button>
                        <div id="myDropdown" class="dropdownsub">
                            <a href="#0">Astraloft</a>
                            <a href="#1">Bowfern</a>
                            <a href="#2">Branshade</a>
                            <a href="#3">Deadbar</a>
                            <a href="#4">Everberg</a>
                            <a href="#5">Jaberdale</a>
                            <a href="#6">Javelinfiled</a>
                            <a href="#7">Manacreek</a>
                            <a href="#8">Mudburn</a>
                            <a href="#9">Onyxlock</a>
                            <a href="#10">Owlstor</a>
                            <a href="#11">Quill Abbey</a>
                            <a href="#12">Runicstor</a>
                            <a href="#13">Shortdeep</a>
                            <a href="#14">Sleekcobe</a>
                            <a href="#15">Vassalpines</a>
                            
                        </div>
                    </div>
                    <div class="dropdown">
                        <button id="myBtn2" class="dropbtn" onclick="myFunction4()">
                            Florestas
                        </button>
                        <div id="myDropdown2" class="dropdownsub">
                            <a href="#16">The Great Wilds</a>
                            <a href="#17">Barklodge Wood</a>
                            <a href="#18">Violent Wood</a>
                            <a href="#19">Dance Groove</a>
                            <a href="#20">Hyena Woodland</a>
                            <a href="#21">Black Eagle Wood</a>                           
                        </div>
                    </div>
                    <div class="dropdown">
                        <button id="myBtn3" class="dropbtn" onclick="myFunction5()">
                            Biomas
                        </button>
                        <div id="myDropdown3" class="dropdownsub" onclick="myFunction5()">
                            <a href="#22">Green Pampas</a>
                            <a href="#23">Misty Swamps</a>
                            <a href="#24">Isla Nublar</a>                                                  
                        </div>   
                    </div>
                    <div class="dropdown">
                        <button id="myBtn4" class="dropbtn" onclick="myFunction6()">
                            Mares
                        </button>
                        <div id="myDropdown4" class="dropdownsub" onclick="myFunction6()">
                            <a href="#25">Gorgon Bay</a>
                            <a href="#26">Chaos Bay</a>
                            <a href="#27">Opaque Gulf</a>
                            <a href="#28">Drake Waves</a>                            
                        </div>
                    </div>
                    <div class="dropdown">
                        <button id="myBtn5" class="dropbtn" onclick="myFunction7()">
                            REINOS
                        </button>
                        <div id="myDropdown5" class="dropdownsub" onclick="myFunction6()">
                            <a href="#29">Nipponia</a>
                            <a href="#30">Dania</a>
                            <a href="#31">Ammos</a>
                            <a href="#32">Libaror</a>                           
                            <a href="#33">Draconia</a>                           
                            <a href="#34">Chicxulub</a>                           
                        </div>
                    </div>
                    <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction2()">
                        &#9776;
                    </a>
                </div>
            </nav>
        </section>
    </header>
    <br>
    <h1 id="cidade">MAPA INTERATIVO</h1>
    <h3>Clique no ícone da cidade que queira visitar:</h3>
    <section>
        <!--
        <p class="centralizador">
            <img src="../imagens/mapa.png" usemap="#mapa-game" alt="">
        </p>

        <map name="mapa-game">
            <area shape="circle" coords="309,143,40" href="#15" alt="Cidade de Somberlaide" title="Somberlaide">
            <area shape="circle" coords="690,110,30" href="#7" alt="Cidade de Manacreek" title="Manacreek">
            <area shape="circle" coords="830,180,40" href="#12" alt="Cidade de Runicstor" title="Runicstor">
            <area shape="circle" coords="485,310,40" href="#10" alt="Cidade de Owlstor" title="Owlstor">
            <area shape="circle" coords="710,305,40" href="#1" alt="Cidade de Bowfern" title="Bowfern">
            <area shape="circle" coords="945,320,40" href="#16" alt="Cidade de Vassalpines" title="Vassalpines">
            <area shape="circle" coords="415,409,40" href="#2" alt="Cidade de Branshade" title="Branshade">
            <area shape="circle" coords="170,270,40" href="#9" alt="Cidade de Onyxlock" title="Onyxlock">
            <area shape="circle" coords="190,495,40" href="#4" alt="Cidade de Everberg" title="Everberg">
            <area shape="circle" coords="125,575,40" href="#13" alt="Cidade de Shortdeep" title="Shortdeep">
            <area shape="circle" coords="538,620,40" href="#3" alt="Cidade de Deadbar" title="Deadbar">
            <area shape="circle" coords="620,653,40" href="#8" alt="Cidade de Mudburn" title="Mudburn">
            <area shape="circle" coords="592,510,40" href="#5" alt="Cidade de Jaberdale" title="Jaberdale">
            <area shape="circle" coords="705,535,40" href="#11" alt="Cidade de Quill Abbey" title="Quill Abbey">
            <area shape="circle" coords="872,418,40" href="#0" alt="Cidade de Astraloft" title="Astraloft">
            <area shape="circle" coords="1050,420,40" href="#6" alt="Cidade de Javelinfiled" title="Javelinfiled">
            <area shape="circle" coords="1240,469,40" href="#14" alt="Cidade de Sleekcobe" title="Sleekcobe">
        </map>
-->
<div>
    <p class="centralizador">
        <iframe id="meuIframe" src="https://www.worldanvil.com/w/calen-emyn-lolo568/map/0d1cd6ef-f068-42a2-88b4-d7010d116dfa"
            title="map"></iframe>
            <button id="reset" onclick="recarregarIframe()">Resetar Mapa </button>


    </p>

</div>
</section>
    <section> <!--CIDADE-->
        <h2 id="0">CIDADES</h2>
        <h3>Astraloft</h3>
        <div class="texto">
            <div>
                <p id="1"> A cidade portuária brilha com um esplendor único, enquanto mergulhadores corajosos coletam
                    tesouros
                    do fundo da baía do caos. Astraloft é conhecida por seu vasto conhecimento em história de artefatos
                    e abriga um posto de estudo da Faculdade Arcana, onde sábios buscam respostas para os mistérios do
                    passado </p>
            </div>
            <div>
                <a href="../imagens/astraloft.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/astraloft.png" alt=""></a>
            </div>
        </div>
        <h3>Bowfern</h3>
        <div class="texto">
            <div>
                <p id="2"> Os campos dourados de trigo e a fragrância da cerveja dominam Bowfern, uma cidade pitoresca e
                    vital
                    para o sustento de toda a região. As melhores bebidas de Emyn são fabricadas com esmero e paixão
                    nesta cidade, enquanto o pão e outros cereais suprem as necessidades de muitos.
                </p>
            </div>
            <div>
                <a href="../imagens/bowfern.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/bowfern.png" alt=""></a>
            </div>
        </div>
        <h3>Branshade</h3>
        <div class="texto">
            <div>
                <p id="3"> Os jardins exuberantes e as plantações encantadoras dão vida a Branshade, uma cidade voltada
                    para a
                    botânica e lar de herbalistas renomados. Suas poções e tônicos, produzidos pelo braço da Faculdade
                    Arcana na cidade, são famosos por sua eficácia e poderes curativos.


                </p>
            </div>
            <div>
                <a href="../imagens/branshade (1).png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/branshade (1).png" alt=""></a>
            </div>
        </div>
        <h3>Deadbar</h3>
        <div class="texto">
            <div>
                <p id="4"> Uma colônia avançada e estratégica de Everberg, Deadbar é um posto militar vigoroso,
                    preparado para
                    fornecer treinamento militar para outras cidades do Pacto Vermelho. Os corajosos guerreiros desta
                    cidade enfrentam desafios constantes para garantir a segurança de toda a região.
                </p>
            </div>
            <div>
                <a href="../imagens/deadbar.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/deadbar.png" alt=""></a>
            </div>
        </div>
        <h3>Everberg</h3>
        <div class="texto">
            <div>
                <p id="5">A capital soberana do Pacto da Terra Unificada é uma cidade majestosa e imponente, orgulhosa
                    de sua
                    presença militar exemplar. A Academia Militar e a Academia das Forças Especiais, que treinam os
                    soldados mais corajosos, elevam o nome de Everberg como símbolo de poder e proteção.
                </p>
            </div>
            <div>
                <a href="../imagens/everberg.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/everberg.png" alt=""></a>
            </div>
        </div>
        <h3>Jaberdale</h3>
        <div class="texto">
            <div>
                <p id="6"> Porta de entrada para os produtos exóticos de outras terras, Jaberdale é um grande mercado
                    onde se
                    pode encontrar de tudo um pouco de todos os lugares. As ruas são uma miscelânea de culturas e cores,
                    e o comércio floresce em todas as suas esquinas.
                </p>
            </div>
            <div>
                <a href="../imagens/jaberdale.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/jaberdale.png" alt=""></a>
            </div>
        </div>
        <h3>Javelinfiled</h3>
        <div class="texto">
            <div>
                <p id="7"> O coração das transações econômicas pulsa em Javelinfiled, onde a Casa da Moeda de Emyn é o
                    santuário mais seguro da região, protegido por inúmeras medidas mágicas. O comércio prospera e
                    moedas reluzentes testemunham a riqueza desta cidade.


                </p>
            </div>
            <div>
                <a href="../imagens/javelinfield.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/javelinfield.png" alt=""></a>
            </div>
        </div>
        <h3>Manacreek</h3>
        <div class="texto">
            <div>
                <p id="8"> Uma cidade subterrânea envolta em uma atmosfera enigmática e misteriosa. A escuridão
                    constante paira
                    sobre Manacreek, uma nuvem densa e esfumaçada, resultado da constante extração de minérios exóticos
                    e valiosos. Seus habitantes usam máscaras de gás, testemunhas do trabalho árduo sob a terra. Mas o
                    brilho dessas riquezas é rivalizado apenas pela coragem e tenacidade do povo que chama Manacreek de
                    lar.


                </p>
            </div>
            <div>
                <a href="../imagens/manacreek.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/manacreek.png" alt=""></a>
            </div>
        </div>
        <h3>Mudburn</h3>
        <div class="texto">
            <div>
                <p id="9"> O mar abraça os pescadores e navegantes de Mudburn, uma cidade costeira que também abriga o
                    Escritório de Cartografia e Geografia. As terras desconhecidas e os tesouros esquecidos estão nos
                    mapas desenhados pelos sábios desta cidade.
                </p>
            </div>
            <div>
                <a href="../imagens/mudburn.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/mudburn.png" alt=""></a>
            </div>
        </div>
        <h3>Onyxlock</h3>
        <div class="texto">
            <div>
                <p id="10"> Um lugar de riquezas escondidas nas profundezas da cordilheira ocidental, Onyxlock é uma
                    cidade
                    mineradora isolada e majestosa. Em suas entranhas repousam a maior mina de pedras preciosas e
                    minerais raros, atraindo aventureiros ousados e caçadores de tesouros em busca de fortuna e glória.
                </p>
            </div>
            <div>
                <a href="../imagens/onyxlock.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/onyxlock.png" alt=""></a>
            </div>
        </div>
        <h3>Owlstor</h3>
        <div class="texto">
            <div>
                <p id="11"> Um bastião da natureza bruta, Somberlaide é uma cidade imponente, cercada por altas paliçadas
                    que
                    protegem seus habitantes das ameaças da grande selva do norte. Seu povo é famoso pela extração de
                    madeira de alta qualidade e pela habilidade em produzir produtos de carpintaria, que adornam toda a
                    região.

                </p>
            </div>
            <div>
                <a href="../imagens/owstor.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/owstor.png" alt=""></a>
            </div>
        </div>
        <h3>Quill Abbey</h3>
        <div class="texto">
            <div>
                <p id="12"> Os casinos reluzentes e as rinhas repletas de emoção dominam Quill Abbey, uma cidade repleta
                    de
                    crime organizado velado. Uma escolha de férias para muitos, essa cidade tem muito a oferecer, desde
                    hotéis luxuosos até parques extravagantes e diversas formas de entretenimento.
                </p>
            </div>
            <div>
                <a href="../imagens/quill_abbey.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/quill_abbey.png" alt=""></a>
            </div>
        </div>
        <h3>Runicstor</h3>
        <div class="texto">
            <div>
                <p id="13"> As ondas do mar ecoam em Runicstor, um majestoso porto pesqueiro e centro comercial de
                    destaque. Os
                    navios vindos de todas as regiões atracam em seus cais para trocar produtos marítimos e minérios
                    preciosos exportados por Manacreek. A cidade é uma constante agitação de negócios e atividades, com
                    a presença marcante da Faculdade Arcana de Emyn, que preserva e dissemina o conhecimento místico.
                </p>
            </div>
            <div>
                <a href="../imagens/runiestor.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/runiestor.png" alt=""></a>
            </div>
        </div>
        <h3>Shortdeep</h3>
        <div class="texto">
            <div>
                <p id="14"> As planícies verdes e vastas pastagens alimentam Shortdeep, uma cidade voltada para a
                    produção de
                    carnes e produtos de origem animal. Os campos ondulantes se estendem até onde os olhos podem ver,
                    enquanto a culinária local é reconhecida por seu sabor inigualável.
                </p>
            </div>
            <div>
                <a href="../imagens/shortdeep.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/shortdeep.png" alt=""></a>
            </div>
        </div>
        <h3>Sleekcobe</h3>
        <div class="texto">
            <div>
                <p id="15">Uma cidade de forte inclinação rural e sabedoria ímpar, Sheekcobe abriga uma sociedade
                    extremamente
                    esclarecida. O Salão Comunal é o local onde todas as cidades do estado se reúnem, e o templo dos
                    Cavaleiros de Apharel, um local sagrado, abriga segredos e lendas.


                </p>
            </div>
            <div>
                <a href="../imagens/sleekcombe.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/sleekcombe.png" alt=""></a>
            </div>
        </div>
        <h3>Somberlaide</h3>
        <div class="texto">
            <div>
                <p id="16"> Um bastião da natureza bruta, Somberlaide é uma cidade imponente, cercada por altas paliçadas
                    que
                    protegem seus habitantes das ameaças da grande selva do norte. Seu povo é famoso pela extração de
                    madeira de alta qualidade e pela habilidade em produzir produtos de carpintaria, que adornam toda a
                    região.

                </p>
            </div>
            <div>
                <a href="../imagens/somberlaide.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/somberlaide.png" alt=""></a>
            </div>
        </div>
        <h3>Vassalpines</h3>
        <div class="texto">
            <div>
                <p id="17"> As águas cintilantes do mar abraçam Vassalpines, uma grande cidade costeira que é o berço da
                    pesca e
                    do comércio marítimo. Aqui, os melhores navios e marinheiros são forjados, e a atividade portuária é
                    constante, impulsionando a economia e a influência da cidade.


                </p>
            </div>
            <div>
                <a href="../imagens/Vassalpines.png" target="_blank" rel="noopener noreferrer"><img class="miniatura"
                        src="../imagens/Vassalpines.png" alt=""></a>
            </div>
        </div>
    </section>
    <section><!--FLORESTAS-->
        <hr>
        <h2 id="florestas">FLORESTAS</h2>
        <h3>The Great Wilds</h3>
        <div class="texto">
            <div>
                <p id="18"> Uma vasta floresta temperada ao norte, lar de povos selvagens como lagartos, trogloditas,
                    orcs e goblinoides. Antigamente, abrigava a capital do Reino Élfico.
                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/greatWilds.jpg" alt="">
            </div>
        </div>
        <h3>Barklodge Wood</h3>
        <div class="texto">
            <div>
                <p id="19"> Uma floresta amaldiçoada pela peste de Aranthir, temida e evitada, onde poucos se aventuram.
                    Criaturas sordidas e bestas amaldiçoadas espreitam em cada canto


                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/barklodgeWood.jpg" alt="">
            </div>
        </div>
        <h3>Violent Wood</h3>
        <div class="texto">
            <div>
                <p id="20">Habitada por goblins e outras criaturas predatórias, esta floresta é cruzada por uma estrada
                    utilizada por ladrões para evitar as cidades. De tempos em tempos patrulhas militares fazem a
                    limpeza das estradas, mas muitos dos que entram nunca saem.

                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/violentWood.jpg" alt="">
            </div>
        </div>
        <h3>Dance Groove</h3>
        <div class="texto">
            <div>
                <p id="21">Uma mata misteriosa repleta de seres feéricos e supostamente esconde um portal para o mundo
                    das fadas. A magia se comporta de forma esquisita e luzes estranhas são vistas durante as noites</p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/danceGroove.jpg" alt="">
            </div>
        </div>
        <h3>Hyena Woodland</h3>
        <div class="texto">
            <div>
                <p id="22">Lar de uma grande população de Gnolls. Esta mata é um lugar perigoso para humanos, fazendo-os
                    preferir navegar ao redor da floresta. As estrdas são abandonadas e cheias de armadilhas. As vilas
                    Gnolls estão muito bem camufladas e qualquer um que chege perto é morto na hora


                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/hyenaWoodland.jpg" alt="">
            </div>
        </div>
        <h3>Black Eagle Wood</h3>
        <div class="texto">
            <div>
                
                <p id="23">Lar de uma grande população de Gnolls. Esta mata é um lugar perigoso para humanos, fazendo-os
                    preferir navegar ao redor da floresta. As estrdas são abandonadas e cheias de armadilhas. As vilas
                    Gnolls estão muito bem camufladas e qualquer um que chege perto é morto na hora


                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/Black Eagle woods.jpg" alt="">
            </div>
        </div>
        
    </section>
    <section><!-- BIOMAS-->
        <hr>
        <h2 id="biomas">BIOMAS</h2>
        <h3>Green Pampas</h3>
        <div class="texto">
            <div>
                <p id="24"> Uma pradaria plana onde crescem gramas altas. Pouco habitada, abriga uma mina de prata e o
                    maior cemitério da região, corrompido pela praga de Aranthir.


                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/greenPampa.jpg" alt="">
            </div>
        </div>
        <h3>Misty Swamps</h3>
        <div class="texto">
            <div>
                <p id="25">Um pantano extremamente úmido e lamacento, difícil de atravessar, com poucas vilas habitadas.
                    Animais peçonhentos e criaturas espreitam pela proxima refeição.

                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/mistySwamp.jpg" alt="">
            </div>
        </div>
        <h3>Isla Nublar</h3>
        <div class="texto">
            <div>
                <p id="26"> Ilha amaldiçoada utilizada como prisão pelos pactos. Abandonada, só é habitada por criaturas
                    selvagens. Os prisioneiros criaram vilas com os materias que tinham a mão e tentam sobreviver da
                    melhor forma possível.

                </p>
            </div>
            <div>
                <img class="miniatura" src="../imagens/islaNublar.jpg" alt="">
            </div>
        </div>
    </section>
    <section>  <!-- MARES-->
        <hr>
        <h2 id="mares">MARES</h2>
        <h3>Gorgon Bay</h3>
        <div class="texto">
            <div>
                <p id="27"> Uma lagoa de água doce, calma e profunda, ponto de navegação essencial no território.
                    Caravelas e naus são vistas com frequência. A boa visibilidade faz com que ataques de piratas sejam
                    facilmente avistados.


                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/gorgonBay.jpg" alt="">
            </div>
        </div>
        <h3>Chaos Bay</h3>
        <div class="texto">
            <div>
                <p id="28"> Baia de água salgada, com ondas e pororocas, dificultando a navegação. Dezenas de navios são
                    afundados ano a ano, sendo um prato cheio para cassadores de tesouros


                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/chaosBay.jpg" alt="">
            </div>
        </div>
        <h3>Opaque Gulf</h3>
        <div class="texto">
            <div>
                <p id="29"> Mar de águas cristalinas e quentes, perfeito para pesca e comércio. Acredita-se que no fundo
                    deste mar se encontra a cidade do povo Tritão e dos elfos marinhos.

                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/opaqueGulf.jpg" alt="">
            </div>
        </div>
        <h3>Drake Waves</h3>
        <div class="texto">
            <div>
                <p id="30"> O mar agitado do norte, com muitas ondas e ventos fortes. Monstros gigantes já forma
                    avistados e mortos nessa região. Muitas vezes tartarugas dragão são confundidas com pequenas ilhas.
                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/drakeWaves.jpg" alt="">
            </div>
        </div>
    </section>
    <section> <!-- REINOS-->
        <hr>
        <h2 id="terras">OUTROS REINOS</h2>
        <h3>Nipponia, a Terra dos Cedros</h3>
        <div class="texto">
            <div>
                <p id="31"> Uma ilha oriental distante, onde um povo sério e honrado habita. A filosofia dos cedros
                    permeia a região, inspirando a precisão e a maestria dos espadachins e a busca pela sabedoria
                    ancestral.
                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/niponia.jpg" alt="">
            </div>
        </div>
        <h3>Dania, a Terra da Noite</h3>
        <div class="texto">
            <div>
                <p id="32"> Uma terra gélida e implacável no extremo norte, onde a noite prevalece por seis meses. Terra
                    dos nórdicos, bárbaros e gigantes, cujas habilidades em forjar armas e armaduras são consideradas
                    quase mágicas </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/Dania.jpg" alt="">
            </div>
        </div>
        <h3>Ammos, a Terra da Areia</h3>
        <div class="texto">
            <div>
                <p id="33"> Ao sul do continente, Ammos é uma terra quente e desértica, onde a ciência arcanas e a
                    astronomia são conhecimentos altamente desenvolvidos. Suas especiarias de culinária são procuradas
                    por todo o mundo.
                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/ammos.jpg" alt="">
            </div>
        </div>
        <h3>Libaror, o reino dos anões </h3>
        <div class="texto">
            <div>
                <p id="34"> Passando pela cordilheira de Emyn, seguindo ao sul, chegar no reino dos anões. Cidades
                    subterrâneas e focadas na mineração. A sociedade é amplamente formada por gnomos e anões.
                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/Libaror.jpg" alt="">
            </div>
        </div>
        <h3>Draconia, a antiga terra dos dragões</h3>
        <div class="texto">
            <div>
                <p id="35"> Ilha próxima ao continente onde os dragões que lutaram com Bahamut criaram suas raízes. Povo
                    reservado e nobre. A maioria não gosta de se envolver na política do continente, mas draconatos são
                    q1uase que 90 % da população
                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/draconia.jpg" alt="">
            </div>
        </div>
        <h3>Chicxulub, a terra Virgem </h3>
        <div class="texto">
            <div>
                <p id="36">Selvas tropicais, pradarias verdes sem fim. Continente descoberto a pouco tempo, Os
                    assentamentos estão começando a se formar. Leva-se mais de 90 dias no mar para se chegar. Utilizada
                    como local de desova de pessoas indesejadas ou de pessoas buscando um recomeço.

                </p>
            </div>

            <div>
                <img class="miniatura" src="../imagens/Chicxulub.png" alt="">
            </div>
        </div>
        <hr>





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
</html>