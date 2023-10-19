
<?php
session_start();
?><!-- Utilizado para definir que este documento segue as regras de sintaxe do HTML 5 -->
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Formatação</title>
		
		<!-- Definição de codificação de caracteres. Recomenda-se usar sempre UTF-8 -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
		<link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/menu.css">
		<link rel="stylesheet" type="text/css" href="../css/corpo.css">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>
	<body>
		
		
		<header>
	<!--modificar essa parte no código-->
	 <!--<div id="divcorpoheader">-->
	   <div id="divesqheader"><!--abertura da div imgheader-->
		<p id="pheader">
		<img id="imgheader" src="../imagens/logonome.png">
		</p>
	   </div>	<!--fechamento da div imgheader-->
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
          <li><a href="../index.php">Inicio</a></li>
          <li><a href="./pagina2.php">Página 2</a>
              <ul>
                  <li><a href="./cadastro.php">Cadastro Login</a></li>
                  <li><a href="./login.php">Logar</a></li>
				  <li><a href="#">Sub 4</a></li>
              </ul>
          </li>
          <li><a href="./pagina3.php">Página 3</a>
              <ul>
                  <li><a href="#">Sub 2</a></li>
                  <li><a href="#">Sub 3</a></li>
                  <li><a href="#">Sub 4</a></li>
              </ul>
          </li>
          <li><a href="./pagina4.php">Página 4</a></li>
		  <li><a href="./pagina5.php">Página 5</a></li>
		  <li><a href="./pagina6.php">Página 6</a></li>
      </ul>
  </nav>
	</section>
	<hr>  
			
		<h3 id="p2" align="center">Título 3</h3>
		<!-- Texto do parágrafo direita -->
		<p align="Left">
		<img src="../imagens/star-wars2.jpg" alt="Star wars" width="300" height="168" 
		align="Left" Hspace="8" title="O despertar da força">
		Assim mesmo, a execução dos pontos do programa facilita a criação dos 
		métodos utilizados na avaliação de resultados. Assim mesmo, a execução dos pontos do programa facilita a criação dos 
		métodos utilizados na avaliação de resultados. Assim mesmo, a execução dos pontos do programa facilita a criação dos 
		métodos utilizados na avaliação de resultados. Assim mesmo, a execução dos pontos do programa facilita a criação dos 
		métodos utilizados na avaliação de resultados.Assim mesmo, a execução dos pontos do programa facilita a criação dos 
		métodos utilizados na avaliação de resultados.Assim mesmo, a execução dos pontos do programa facilita a criação dos 
		métodos utilizados na avaliação de resultados.
		</p>
        <br>
		<br>
		<br>
		<br>
		<br>
		<p align="center">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/A8n67p98dag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</p>
		
		<br>
		<hr>
		<br>
		<footer>
	<!-- incluir no código-->
	 <div id="divesqfooter"><!--início div divesqfooter-->	
		
		<a href="https://pt-br.facebook.com/" target="black">
		<img class="imgredes" src="../imagens/logoface.png" alt="Facebook" title="facebook" >
		</a>
		<a	href="https://www.instagram.com/?hl=pt-br" target="black">		
		<img class="imgredes" src="../imagens/logoinst.png" alt="instagram"  title="instagram" >
		</a>
		<a	href="https://twitter.com/login?lang=pt" target="black">	
		<img class="imgredes" src="../imagens/logotwi.png" alt="twitter"  title="twitter" >
		</a>
		
	 </div>	<!--fechamento div divesqfooter-->
	 <div id="divmeiofooter"><!--início div divmeiofooter-->
			Desenvolvido por Miguel Matiolla
	 </div><!--fechamento div divmeiofooter-->
	</footer>
	</body>
</html>