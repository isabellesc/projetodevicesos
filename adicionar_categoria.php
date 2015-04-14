<!menu admin não funcional-->

<?php

//registar categoria
	if(isset($_REQUEST['registar'])) {

//ligacao bd
	include('shopp.php');

//verificar se existe categoria
	$sql_categoria = "SELECT nome_categoria FROM categorias";
	$consulta1 = mysql_query($sql_categoria);
	$resultado = mysql_fetch_array($consulta1);

//verificar se ja existe categoria e definir variavel com nome
		if ($resultado['nome_categoria'] == $_POST['nome_cat']){

//caso exista informa o utilizador
		echo "ja existe uma categoria com o mesmo nome";
		}
			else {
//registar nova categoria
				$sql_nova_cat = "INSERT INTO categorias(nome_categoria) VALUES ('".$POST['nome_cat']."') ";

				$consulta2 = mysql_query($sql_nova_cat);

				
//remeter para menu
		header("Location: menu_admin.php");
		} }

?>

	<table width='800 px' border='1' align='center'>
	<form id="form_registo" name="form_registo" method="POST" action="adicionar_categoria.php">

		<td>Nome da Categoria: <input type="text" name ="nome_cat" size="20" id="nome_cat" /></td>

		<p>
		<td><input type="submit" name ="registar" id="registar" value="registar" />
			<input type="reset" name="apagar" id="apagar" value="apagar" /></td>
		</tr></form>

		<td colspan="4" align="center"><p>Clicar <a href="menu_admin.php"> aqui </a>para voltar ao menu de administração </td></p></table>