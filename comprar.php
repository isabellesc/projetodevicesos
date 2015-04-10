<?php
//iniciar sessão
	session_start();

//ligação à base de dados
	include('shopp.php');

//codigo do artigo
	$id_artigo = $_REQUEST['id_artigo'];

//preparar sessao de compra
	$sessao = session_id();

//pesquisar artigo seleccionado
	$sql_artigo = "SELECT * FROM artigos WHERE id_artigo =".$id_artigo;

	$consulta1 = mysql_query($sql_artigo);
	$mostrar = mysql_fetch_array($consulta1);

//mostrar detalhes do artigo seleccionado
	echo "<table width='800 px' border='1' align='center'>";
	echo "<p align='center'><a href=\"lista_compras.php\">Ver lista de compras</a></p>";
	echo "<p align='center'><a href=\"index.php\">Ver todos os artigos</a></p>";
	echo "<strong><p align='center'>Artigos seleccionados:</strong></p><td align='center' width='100' height='100' valign='middle'><img src='pasta_imagens/" .$mostrar['imagem_artigo']."'border='0' width='380' </br>";
	echo "<td><align='center'>".$mostrar['nome_artigo']."</a></br> € ".$mostrar['preco_artigo']." </br>".$mostrar['descricao_artigo']."</br>";


//Seleccionar quantidade temporaria
	$sql_quantidade = 'SELECT quantidade FROM compra_temporaria WHERE sessao = "'.$sessao.'" AND id_artigo = "'.$id_artigo. '"';
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
		} else {
			echo '<align="center"><input type="submit" name ="submit" value="Adicionar"/>'; }
				//echo '<input type="input="hidden" name="id_artigo" value="'.$id_artigo.'"/>';
				echo "</form>";
				echo "</table>";

?>

