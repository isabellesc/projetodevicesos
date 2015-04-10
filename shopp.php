<?php

//credenciais de acesso
	$servidor = "localhost";
	$utilizador = "root";
	$password = "root";
	$basedados = "shopp";
	$port = 3306;


//ligacao com bd nos parametros anteriores
	$ligacao = mysql_connect($servidor, $utilizador, $password) or die ('Erro de ligação à base de dados');
	mysql_select_db($basedados, $ligacao);

//consulta bd
	$consulta = "SELECT * FROM artigos;";
	$resultado = mysql_query($consulta);

//organizacao e apresentar os dados
	while ($registo = mysql_fetch_assoc($resultado)){
		echo $registo['ver_categorias']; }

?>