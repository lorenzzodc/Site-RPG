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
		
		<h2 align="center">Filmes do Star Wars</h2>
		
		<table align="center" >		
			<thead>	
				<tr>				
					<td align="center"><h3> Ano da estreia</h3></td>
					<td align="center"><h3>Título do filme</h3></td>
					<td align="center"><h3>Capa do filme</h3></td>					
				</tr>				
			</thead>			
			 <tbody>	
				<tr>				
					<td align="center"><h3>1977</h3></td>
					<td align="center"><h3>Star Wars, Episódio IV: Uma Nova Esperança</h3></td>
					<td><img src="../imagens/s1.jpg" alt="Star Wars, Episódio IV: Uma Nova Esperança" 
					width="138" height="190" align="Left" Hspace="8" 
					title="Star Wars, Episódio IV: Uma Nova Esperança" align="center">
					</td>		
				</tr>
				<tr>				
					<td align="center"><h3>1980</h3></td>
					<td align="center"><h3>Star Wars, Episódio V: O Império Contra-Ataca</h3></td>
					<td><img src="../imagens/s2.jpg" alt="Star Wars, Episódio V: O Império Contra-Ataca" 
					width="138" height="190" align="Left" Hspace="8" 
					title=" Episódio V: O Império Contra-Ataca" align="center">
					</td>		
				</tr>
				<tr>				
					<td align="center"><h3>1983</h3></td>
					<td align="center"><h3>Star Wars, Episódio VI: O Retorno do Jedi</h3></td>
					<td><img src="../imagens/s3.jpg" alt="Star Wars, Episódio V: O Império Contra-Ataca" 
					width="138" height="190" align="Left" Hspace="8" 
					title=" Episódio V: O Império Contra-Ataca" align="center">
					</td>		
				</tr>
				<tr>				
					<td align="center"><h3>1999</h3></td>
					<td align="center"><h3>Star Wars: Episódio I: A Ameaça Fantasma</h3></td>
					<td><img src="../imagens/s4.jpg" alt="Star Wars: Episódio I: A Ameaça Fantasma" 
					width="138" height="190" align="Left" Hspace="8" 
					title=" Star Wars: Episódio I: A Ameaça Fantasma" align="center">
					</td>		
				</tr>	
				<tr>				
					<td align="center"><h3>2002</h3></td>
					<td align="center"><h3>Star Wars: Ataque dos Clones</h3></td>
					<td><img src="../imagens/s5.jpg" alt="Star Wars: Ataque dos Clones" 
					width="138" height="190" align="Left" Hspace="8" 
					title="Star Wars: Ataque dos Clones" align="center">
					</td>		
				</tr>
				<tr>				
					<td align="center"><h3>2005</h3></td>
					<td align="center"><h3>Star Wars: Episódio III – A Vingança dos Sith</h3></td>
					<td><img src="../imagens/s6.jpg" alt="Star Wars: Episódio III – A Vingança dos Sith" 
					width="138" height="190" align="Left" Hspace="8" 
					title="Star Wars: Episódio III – A Vingança dos Sith" align="center">
					</td>		
				</tr>
				<tr>				
					<td align="center"><h3>2015</h3></td>
					<td align="center"><h3>Star Wars: O Despertar da Força</h3></td>
					<td><img src="../imagens/s7.jpg" alt="Star Wars: O Despertar da Força" 
					width="138" height="190" align="Left" Hspace="8" 
					title="Star Wars: O Despertar da Força" align="center">
					</td>		
				</tr>
				<tr>				
					<td align="center"><h3>2017</h3></td>
					<td align="center"><h3>Star Wars: Os Últimos Jedi</h3></td>
					<td><img src="../imagens/s8.jpg" alt="Star Wars: Os Últimos Jedi" 
					width="138" height="190" align="Left" Hspace="8" 
					title="Star Wars: Os Últimos Jedi" align="center">
					</td>		
				</tr>
				<tr>				
					<td align="center"><h3>2019</h3></td>
					<td align="center"><h3>Star Wars: A Ascensão Skywalker</h3></td>
					<td><img src="../imagens/s9.jpg" alt="Star Wars: A Ascensão Skywalker" 
					width="138" height="190" align="Left" Hspace="8" 
					title="Star Wars: A Ascensão Skywalker" align="center">
					</td>		
				</tr>					
			 </tbody>		
			<tfoot>	
				<tr>				
					<td colspan="3" align="center"><h3>Que a força esteja com você!</h3></td>
								
				</tr>			
			</tfoot>	
		</table>
			
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