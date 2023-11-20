<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Star wars</title>
	<meta charset="utf-8">
	<!--viewport - ou  janela de visualização é a área visível do 
		usuário de uma página da web.
		width=device-width  define a largura da página para seguir a 
		largura da tela do dispositivo (que varia de acordo com o dispositivo).
		initial-scale=1.0 define o nível de zoom inicial quando a página 
		é carregada pela primeira vez pelo navegador.
		
		-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/corpo.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
	<!--
<header> - define um cabeçalho para um documento ou seção
<nav> - Define um contêiner para links de navegação
<section> - define uma seção em um documento
<article> - Define um artigo independente e independente
<aside> - Define o conteúdo além do conteúdo (como uma barra lateral)
<footer> - define um rodapé para um documento ou seção
-->
	<main>
		<header>
			<!--modificar essa parte no código-->
			<!--<div id="divcorpoheader">-->
			<div id="divesqheader">
				<!--abertura da div imgheader-->
				<p id="pheader">
					<img id="imgheader" src="imagens/logonome.png">
				</p>
			</div>
			<!--fechamento da div imgheader-->
			<div id="divmeioheader">
				Que a força esteja com você!

			</div>
			<!--</div>-->
		</header>
		<hr>
		<section>
			<input type="checkbox" id="bt_menu" />
			<label for="bt_menu">&#9776;</label>
			<nav id="menu">
				<ul>
					<li><a href="./index.html">Inicio</a></li>
					<li><a href="./paginas/pagina2.html">Página 2</a>
						<ul>
							<li><a href="./paginas/cadastro.html">Cadastro Login</a></li>
							<li><a href="./paginas/login.html">Logar</a></li>
							<li><a href="#">Sub 4</a></li>
						</ul>
					</li>
					<li><a href="./paginas/pagina3.html">Página 3</a>
						<ul>
							<li><a href="#">Sub 2</a></li>
							<li><a href="#">Sub 3</a></li>
							<li><a href="#">Sub 4</a></li>
						</ul>
					</li>
					<li><a href="./paginas/pagina4.html">Página 4</a></li>
					<li><a href="./paginas/pagina5.html">Página 5</a></li>
					<li><a href="./paginas/pagina6.html">Página 6</a></li>
				</ul>
			</nav>
		</section>
		<hr>

		<section>
			<article>
				<?php
				if (isset($_SESSION['nome_usu_sessao'])) {
					echo 'olá ' . $_SESSION['nome_usu_sessao'] . 'tudo certo vivente? Seja bem vindo!';
					echo "<a href='index.html?logout'>Logout</a>";
				} else {
					echo "<a href='./paginas/login.html'>acessar Sistema</a>";
				}
				if (isset($_GET['logout'])) {
					session_destroy();
					header("location:index.html");
				}

				?>
				<p class="pcenter">
					Título 1
					<br>
					<img id="ileft" src="imagens/star-wars.jpg" alt="star-wars" title="star-wars">
					E Percebemos, cada vez mais, que a contínua expansão de nossa
					atividade maximiza as possibilidades por conta das posturas dos
					órgãos dirigentes com relação às suas atribuições. E Percebemos,
					cada vez mais, que a contínua expansão de nossa atividade maximiza as
					possibilidades por conta das posturas dos órgãos dirigentes com relação
					às suas atribuições. E Percebemos, cada vez mais, que a contínua
					expansão de nossa atividade maximiza as possibilidades por conta
					das posturas dos órgãos dirigentes com relação às suas atribuições.
				</p>

				<h2 id="p1">Título 2</h2>
				<p class="pjustify">
					<a href="paginas/pagina2.html">
						<img id="iright" src="imagens/star-wars1.jpg" alt="Star wars" title="Os últimos jedi">
					</a>
					Desta maneira, a determinação clara de objetivos obstaculiza a
					apreciação da importância dos paradigmas corporativos.Desta maneira, a determinação clara de
					objetivos obstaculiza a
					apreciação da importância dos paradigmas corporativos.Desta maneira, a determinação clara de
					objetivos obstaculiza a
					apreciação da importância dos paradigmas corporativos.Desta maneira, a determinação clara de
					objetivos obstaculiza a
					apreciação da importância dos paradigmas corporativos.
				</p>
				<h3 id="p2">Título 3</h3>
				<p class="pcenter">
					<a href="paginas/pagina3.html">
						<img id="ileft" src="imagens/star-wars2.jpg" alt="Star wars" title="O despertar da força">
					</a>
					Assim mesmo, a execução dos pontos do programa facilita a criação dos
					métodos utilizados na avaliação de resultados. Assim mesmo, a execução dos pontos do programa
					facilita a criação dos
					métodos utilizados na avaliação de resultados. Assim mesmo, a execução dos pontos do programa
					facilita a criação dos
					métodos utilizados na avaliação de resultados. Assim mesmo, a execução dos pontos do programa
					facilita a criação dos
					métodos utilizados na avaliação de resultados.Assim mesmo, a execução dos pontos do programa
					facilita a criação dos
					métodos utilizados na avaliação de resultados.Assim mesmo, a execução dos pontos do programa
					facilita a criação dos
					métodos utilizados na avaliação de resultados.
				</p>
				<h4 id="p3">Título 4</h4>
				<!-- Texto do parágrafo esquerda -->
				<p id="pright">
					<a href="paginas/pagina4.html">
						<img id="iright" src="imagens/star-wars3.png" alt="Star wars" title="Guerra nas estrelas">
					</a>
					Assim mesmo, a execução dos pontos do programa facilita a criação dos
					métodos utilizados na avaliação de resultados. Assim mesmo, a execução dos pontos do programa
					facilita a criação dos
					métodos utilizados na avaliação de resultados. Assim mesmo, a execução dos pontos do programa
					facilita a criação dos
					métodos utilizados na avaliação de resultados. Assim mesmo, a execução dos pontos do programa
					facilita a criação dos
					métodos utilizados na avaliação de resultados.Assim mesmo, a execução dos pontos do programa
					facilita a criação dos
					métodos utilizados na avaliação de resultados.Assim mesmo, a execução dos pontos do programa
					facilita a criação dos
					métodos utilizados na avaliação de resultados.

				</p>
			</article>
		</section>

		<footer>
			<!-- incluir no código-->
			<div id="divesqfooter">
				<!--início div divesqfooter-->

				<a href="https://pt-br.facebook.com/" target="black">
					<img class="imgredes" src="imagens/logoface.png" alt="Facebook" title="facebook">
				</a>
				<a href="https://www.instagram.com/?hl=pt-br" target="black">
					<img class="imgredes" src="imagens/logoinst.png" alt="instagram" title="instagram">
				</a>
				<a href="https://twitter.com/login?lang=pt" target="black">
					<img class="imgredes" src="imagens/logotwi.png" alt="twitter" title="twitter">
				</a>

			</div>
			<!--fechamento div divesqfooter-->
			<div id="divmeiofooter">
				<!--início div divmeiofooter-->
				Desenvolvido por Miguel Matiolla
			</div>
			<!--fechamento div divmeiofooter-->
		</footer>
	</main>
</body>

</html>