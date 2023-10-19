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
	
		
		
		<h2 align="center">Cadastro de cliente</h2>
		<form action="cadastrar.php" method="post">
		<table align="center" >		
			<thead>	
				<tr>				
					<td colspan="3" align="center"><h3>Todos os campos são obrigatórios.</h3></td>					
				</tr>				
			</thead>			
			 <tbody>	
				<tr>				
					<td align="right"><h3><label>Nome:</label></h3></td>
					<td align="left"><input type="text" name="nome" required></td>
							
				</tr>
				<tr>				
					<td align="right"><h3><label>Sobrenome:</label></h3></td>
					<td align="left"><input type="text" name="sobrenome" required></td>
							
				</tr>
				</tr>
				<tr>				
					<td align="right"><h3><label>Data de nascimento:</label></h3></td>
					<td align="left"><input type="date" name="datanasc" required></td>
							
				</tr>
				<tr>				
					<td align="right"><h3><label>Endereço:</label></h3></td>
					<td align="left"><input type="text" name="endereco" required></td>
							
				</tr>
				<tr>				
					<td align="right"><h3><label>Bairro:</label></h3></td>
					<td align="left"><input type="text" name="bairro" required></td>
							
				</tr>	
				<tr>				
					<td align="right"><h3><label>Cidade:</label></h3></td>
					<td align="left"><input type="text" name="cidade" required></td>
							
				</tr>
				<tr>				
					<td align="right"><h3><label>Estado:</label></h3></td>
					<td align="left">
					<select name="estado" required>
<option selected="" value="">Selecione o Estado (UF)</option>
<option value="Acre">Acre</option>
<option value="Alagoas">Alagoas</option>
<option value="Amapá">Amapá</option>
<option value="Amazonas">Amazonas</option>
<option value="Bahia">Bahia</option>
<option value="Ceará">Ceará</option>
<option value="Distrito Federal">Distrito Federal</option>
<option value="Espírito Santo">Espírito Santo</option>
<option value="Goiás">Goiás</option>
<option value="Maranhão">Maranhão</option>
<option value="Mato Grosso">Mato Grosso</option>
<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
<option value="Minas Gerais">Minas Gerais</option>
<option value="Pará">Pará</option>
<option value="Paraíba">Paraíba</option>
<option value="Paraná">Paraná</option>
<option value="Pernambuco">Pernambuco</option>
<option value="Piauí">Piauí</option>
<option value="Rio de Janeiro">Rio de Janeiro</option>
<option value="Rio Grande do Sul">Rio Grande do Sul</option>
<option value="Rio Grande do Norte">Rio Grande do Norte</option>
<option value="Rondônia">Rondônia</option>
<option value="Roraima">Roraima</option>
<option value="Santa Catarina">Santa Catarina</option>
<option value="São Paulo">São Paulo</option>
<option value="Sergipe">Sergipe</option>
<option value="Tocantins">Tocantins</option>
</select>
			</td>
							
				</tr>
				<tr>				
					<td align="right"><h3><label>Sexo:</label></h3></td>
					<td align="left">
					<input type="radio" name="sexo" value="M">Masculino
					
					<input type="radio" name="sexo" value="F">Feminino
					</td>
							
				</tr>
				<tr>				
					<td align="right"><h3><label>Celular:</label></h3></td>
					<td align="left"><input type="tel" name="celular" required></td>
						
				</tr>
				<tr>				
					<td align="right"><h3><label>E-mail:</label></h3></td>
					<td align="left"><input type="email" name="email" required 
					placeholder="nome@dominio.com"></td>
							
				</tr>
				<tr>				
					<td align="right"><h3><label>Usuário:</label></h3></td>
					<td align="left"><input type="text" name="usuario" required></td>
							
				</tr>
				<tr>				
					<td align="right"><h3><label>Senha:</label></h3></td>
					<td align="left"><input type="password" name="senha" required ></td>
							
				</tr>
					<tr>				
					<td align="right"><h3><label>Observação:</label></h3></td>
					<td align="left">
					<textarea name="obs" rows="4" cols="30"></textarea></td>
							
				</tr>	
			 </tbody>		
			<tfoot>	
				<tr>				
					<td colspan="2" align="center">
					
					<br>
					<input type="submit" value="Cadastrar">
					<input type="reset" value="Limpar">
					</td>
								
				</tr>			
			</tfoot>	
		</table>
		
		</form>	
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