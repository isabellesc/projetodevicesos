<table width="800 px" border="1" align="center">

	<form action="processa_registo_artigo.php" method="POST" enctype="multipart/form-data">

		<tr><td>Nome do artigo</td>
		<td><input type="text" name="nome_prod" size=50/></td></tr>
		<tr><td>Descrição do artigo</td>
		<td><textarea name="desc_prod" rows="10" cols="40"></textarea></td>
		<tr></tr><tr><td>Preço do artigo</td>
		<td><input type="text" name="preco_prod" size=10/></td></tr>
		<tr><td>Total de unidades do artigo ("stock")</td>
		<td><input type="text" name="stock_prod" size=10/></td></tr>

		<td>Categoria do artigo:


<?php
//ligação bd
	include('shopp.php');

//procurar categorias disponiveis
	$sql = "SELECT * FROM categorias ORDER BR nome_categoria ASC;";
	$consulta = mysql_query($sql);

//criar selecao de categorias
	echo '<td><select name="cat_prod">';
	while ($mostrar = mysql_fetch_assoc($consulta)) {

	echo "<option value=" . $mostrar['id_categoria'] . "> " . $mostrar['nome_categoria'] . "</option>";

	}

?>


<tr><td>Imagem do artigo (formato .JPEG e tamanho máx. = 350 kB!)</td>
	<td><input name="imagem" size="40" type="file" /></td></tr>
	<td><input name="enviar" type="submit" value="Registar artigo" /><input name="resetar" type="reset" value="Apagar" /></td></form>
	<td colspan="4" align="center"><p>Clicar <a href="menu_admin.php"> aqui</a> para voltar ao menu de administração</p></td></table>

