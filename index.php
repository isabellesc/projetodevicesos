<?php

//iniciar sessão
	session_start();

//ligação db
	include('shopp.php');
?>



<table width="1020" height='500' border="10" cellspacing="0" cellpadding="0" align="center">
	<tr><td width="200"></td>
	<td width="600">

		<?php
		//verificar se ja foi feita a autentificação
		if(isset($_SESSION['nivel_utilizador'])) {
			echo "Olá ".$_SESSION['nome_login'];
			echo " || <a href='lista_compras.php'>Ver lista de compras</a>";
			echo " || <a href='estado_encomenda.php'>Ver estado da encomenda</a>";
			echo " || <a href='loyout.php'>Terminar sessão</a>";
		} else {
			include('login.php'); 

			if(isset($_GET['erro'])) {
				switch($_GET['erro']) {
					case 1: print 'Login invalido'; break;
				}
			}
		}
		?>

	</td></tr>
	<tr>
	<td align="center"><strong>Categorias de artigos</strong></td>
	<td align="center"><strong>Artigos em destaque</strong></td>
	</tr>

	<tr>
	<td width='50'><?php include('ver_categorias.php'); ?></td>

	<td>

		<?php
		//procurar 5artigos aleatoriamente
			$sql_artigo = "SELECT * FROM artigos ORDER BY RAND() LIMIT 5";
			$consulta = mysql_query($sql_artigo);

		//mostra os 5artigos encontrados
			echo "<table colspan='5' width='800 px' border='0' cellpadding='0' cellspacing='0' align='center'>";

			while ($mostrar = mysql_fetch_array($consulta)){
				echo "<th align='center' width='150' height='100' valign='middle'><a href='comprar.php?id_artigo=".$mostrar['id_artigo']."'>".$mostrar['nome_artigo']."</th>";
				echo "<a href='comprar.php?id_artigo=".$mostrar['id_artigo']."'><img src='pasta_imagens/".$mostrar['imagem_artigo']."' border='0' width='160'>"; }

			echo "</table>";
		?>


