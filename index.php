<?php

?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Menu</title>
	</head>
	<body style="background-color: white;">
		<div style="font-family: arial; color: rgb(4,50,112); font-size: 45px; padding: 25px;"><center><b>Olá!</b></center></div>
			
		<font style="color: rgb(59,62,80); font-family: arial; font-size: 20px;">
			<center>
				<b>Selecione uma opção abaixo:<br><br></b>
			</center>
		</font>

		<hr width="50%">
		
		<table class="" border="0" width="60%" height="10%" align="center">
			<tr>
				<td></td>
				<td width="27%" height="200" >
					<font class="txtMenu">
						<center>
							<form action="cadastro.php">
           						<input type="submit" value="Cadastrar Moeda" onclick=""/>
        					</form>
						</center>
					</font>
				</td>
				<td width="27%" height="200" >
					<font class="txtMenu">
						<center>
							<form action="registro_moeda.php">
           						<input type="submit" value="Alterar informações da moeda" onclick=""/>
        					</form>
						</center>
					</font>
				</td>
				<td width="27%" height="200">
					<font class="txtMenu">
						<center>
							<form action="sorteio.php">
           						<input type="submit" value="Sortear" onclick=""/>
        					</form>
						</center>
					</font>
				</td>
				<td></td>			
			</tr>
		</table>

	</body>
</html>