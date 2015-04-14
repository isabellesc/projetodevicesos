<! Não funcional -->

<php

//iniciar sessão
	session_start();

//ligacao a bd
	include('shopp.php');

//verificacao se o utilizador realizou o acesso
	if(!isset($_SESSION['nivel_utilizador'])){

		echo "<tr>Não autorizado a aceder a esta página </tr>";
		echo "<tr><a href='index.php'>Voltar à página inicial</a></tr>";
		}

			else{

				if ($_SESSION['nivel_utilizador'] == 2) {
					$id_cliente = $_SESSION['id_cliente']; } else { $id_cliente =! 0; }


//pesqisar bd
	$sql_encomendas = "SELECT * FROM compra_temporaria WHERE estado_compra='0' AND id_cliente="id_cliente;

	$consulta = mysql_query($sql_encomendas);

	$resultado = mysql_num_rows($consulta);

			else {

				echo "<table width='800 px' border='1' align='center'>";
				echo "<tr><td colspan='4' align='center'Lista de encomendas</td></tr>";
				echo "<th>Nr encom.</th><th>Nr cliente</th><th>Data da compra</th><th>Estado</th>";

			while ($mostrar = mysql_fetch_array($consulta)) {

				extract($mostrar);

				echo '<tr>

				<td align="centre">'.$id_compra.'</td>
				<td align="center" width="50px">'.$id_cliente.'</td>
				<td align="centre" >'.$data_compra.'</td>
				<td align="centre" >'.$id_compra.'</td>
				<td align="centre" >'.$estado_compra.'</td>

				</tr>'; }

				echo "</table>"

			if ($_SESSION['nivel_utilizador'] == 1) {

				echo '<p align="centre">Clicar <a href="administrador/menu_admin.php">aqui</a> para voltar ao menu de administração</p>'; }

			else {
				echo '<p align="centre">Clicar <a href="index.php">aqui </a> para voltar à página inicial </p>'; } }

?>



<a href="javasript:window.print();" >

	<?php

	if ($estado_compra == '0') { echo "<font color='#FFFF00'>Pendente"; }
	elseif ($estado_compra == '1') { echo "<font color='#009900'>Expedida"; }
	elseif ($estado_compra == '2') { echo"<font color='#FF0000'Terminada"; }

	?>






