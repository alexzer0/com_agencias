<form name="frmLogin" id="frmLogin" method="post" action="vLogin.php">

<table align="center" cellpadding="5" cellspacing="0" width="40%">

<caption>

Entrar a P&Aacute;gina de Agencia Mayoristas

</caption>

	<tr class="odd">

		<td colspan="2">

		<?php

		if(isset($_GET['error'])){

			if ($_GET['error']==1) { 

				 echo "<div class='msgError'>

				 Usuario y/o Contrase�a incorrecto, debe registrarse para acceder al sistema.

				 </center>"; 

			}

		}

		?></td>

	</tr>

	<tr>

		<td>Usuario:</td>

	  <td><img src="user.jpg" title="Usuario" />&nbsp;<input type="text" name="user" id="inputtext" />&nbsp;</td>		

	</tr>

	<tr>

		<td>Contrase�a:</td>

		<td><img src="pass.jpg" title="Contrase�a" />&nbsp;<input type="password" name="pass" id="inputtext" />&nbsp;</td>

	</tr>

	<tr>

		<td colspan="2" align="right"><input type="submit" value="Entrar �" id="inputbuton" /></td>

	</tr>

	<tr class="odd">

		<td colspan="2" align="center" bgcolor="#D3E7CF">

		<strong>Si su agencia no esta registrada Solicite su Acceso �</strong><br /><br />

		<a href="newpass.php"><img src="btnIngresar.jpg" border="0" /></a>

		</td>

	</tr>

</table>

</form>