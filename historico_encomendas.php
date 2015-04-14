<! NÃO FUNCIONAL -->


<?php

//iniciar sessao
	session_start();

//ligacao bd
	include("shopp.php");


//verificacao de acesso
	if(!isset($_SESSION['nivel_utilizador'])){

		echo "<tr>Não está autorizado a aceder a página </tr>";

		echo "<tr><a href='index.php'>Voltar à página inicial</a></tr>"; }


			else {

//pesquisa bd
				$sql_encomendas = "SELECT * FROM compra_confirmada WHERE estado_compra='2'";

				$consulta = mysql_query($sql_encomendas);

				$resultado = mysql_num_rows($consulta);


//caso nao existam resultados, avisa o utilizador

	if ($resultado == 0) {

		echo "<tr>Não existem compras </tr>";

		echo "<tr><a href='index.php'>Voltar à página inicial </a></tr>"; }

//caso contrário, exibe os resultados

			else {

				echo "<table width='800 px' border='1' align='center'>";

				echo "<tr><td colspan='4' align='center'>Histórico de encomendas</td></tr>";

				echo "<th>Nº encom.</th><th>Nº Cliente</th><th>Data da compra</th><th>Estado da compra</th>";

//Registos

	while ($mostrar = mysql_fetch_array($consulta)) {

		extract($mostrar);

		echo '<tr><td>$id_compra</td>'

		<td align=\"center" width=\"50px">$id_cliente</td>

		<td align=\"center" >$data_compra</td>

		<td align=\"center" >';


//estado colorida

	if ($estado_compra == '0') {

		echo "<font color='FFFF00'>Pendente"; 


	elseif ($estado_compra == '1') {

		echo "<font color='#009900'>Expedida"; 
	}

	elseif ($estado_compra == '2') {

		echo "<font color ='#FF0000'>Terminada";
	}
	
	echo "</td></tr>";
	}


//hiperligacao para voltar ao menu

	echo '<p align="center">Clicar<a href='administrador/menu_admin.php">aqui</a> para voltar ao menu de administração</p>';

	echo "</table>";

}}

?>