<?php

//iniciar sessão
	session_start();

//ligacao a bd
	include('shopp.php');

//seleccionar quantidade temporaria
	$sql_quantidade = 'SELECT quantidade FROM compra_temporaria WHERE sessao = "'.$sessao.'" AND id_artigo ="'.$id_artigo. '"';
	$consulta2 = mysql_query($sql_quantidade);
	$resultado = mysql_fetch_assoc($consulta2);

//se houver quantidade ja inseridas, mostra o valor
	if (mysql_num_rows($consulta2) > 0) { $quantidade = $resultado ['quantidade']; }

//se nao houver quantidade
		else { $quantidade = 0;}



//iniciar formulario para atualizar valores de quantidade
	echo '<form method="POST" action="atualizar_compra.php">';

//apresentar quantidade a zero ou nr de vezes seleccionado
	echo '<p>Quantidade: <input type="text" name="quantidade" id="quantidade" size="2" value="'.$quantidade.'"/>';

//se a quantidade for positiva, permite alterar ou remover quantidade/artigo
	if ($quantidade > 0){
		echo '<align="center"><input type="submit" name="submit" value="Alterar"/>';
		echo '<align="center"><input type="submit" name="submit" value="Remover artigo" />';

//se a quantidade for nula, permitem adicionar artigo
		} else{
			echo '<align="center"><input type="submit" name ="submit" value="Adicionar"/>';}
				echo '<input type="input="hidden" name="id_artigo" value="'.$id_artigo.'"/>';
				echo "</form>"
				echo "</table>"
?>
