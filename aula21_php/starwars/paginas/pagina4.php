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
          <li><a href="../index.html">Inicio</a></li>
          <li><a href="./pagina2.html">Página 2</a>
              <ul>
                  <li><a href="./cadastro.html">Cadastro Login</a></li>
                  <li><a href="./login.html">Logar</a></li>
				  <li><a href="#">Sub 4</a></li>
              </ul>
          </li>
          <li><a href="./pagina3.html">Página 3</a>
              <ul>
                  <li><a href="#">Sub 2</a></li>
                  <li><a href="#">Sub 3</a></li>
                  <li><a href="#">Sub 4</a></li>
              </ul>
          </li>
          <li><a href="./pagina4.html">Página 4</a></li>
		  <li><a href="./pagina5.html">Página 5</a></li>
		  <li><a href="./pagina6.html">Página 6</a></li>
      </ul>
  </nav>
	</section>
	<hr>  
	
		<h4 id="p3" align="center">Título 4</h4>
		<!-- Texto do parágrafo esquerda -->
		<p align="right">
		<a	href="paginas/star-wars3.html" target="blank">
		<img src="../imagens/star-wars3.png" alt="Star wars" width="300" 
		height="168" align="right" Hspace="8" title="Guerra nas estrelas">
		</a>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.1268069289904!2d-81.56606268544617!3d28.38523770198205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dd7ee634caa5f7%3A0xa71e391fd01cf1a0!2sWalt%20Disney%20World%20Resort!5e0!3m2!1spt-BR!2sbr!4v1589592738831!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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