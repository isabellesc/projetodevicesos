<?php
//ligacao a bd
//ver categorias, detalhes > artigos_categoria
	include('shopp.php');

//procurar categorias disponiveis
	$sql_cat = "SELECT * FROM categorias ORDER BY nome_categoria ASC";
	$consulta = mysql_query($sql_cat);

//apresentar categorias disponiveis

	while ($mostrar = mysql_fetch_array($consulta)) {
		$nome_categoria = $mostrar['nome_categoria'];
		$id_categoria = $mostrar['id_categoria'];

echo "<p><a href=\"artigos_categoria.php?id_cat=$id_categoria\">$nome_categoria</a>"; }
?>