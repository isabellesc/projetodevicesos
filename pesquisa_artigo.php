<?php
//pesquisar artigo
if (isset($_REQUEST['pesquisar'])) {

//ligacao a bc
include ('shopp.php');

//pesquisa com com COMANDO LIKE
//juntamente com WILDCARDS (%) q sao caracteres especificos
//q permitem a procura de um termo de uma determinada forma
//ou seja, STRINGS "_" (underscore)
$termo_pesquisa = '%'.$_POST['mac'].'%';

$sql_artigo = "SELECT * FROM artigos WHERE nome_artigo LIKE '$termo_pesquisa' ";

$consulta = mysql_query($sql_artigo);
$resultado = mysql_num_rows($consulta);
if ($resultado !=0) {

	echo "<table width='800 px' border='1' align='center'>";
	echo "<th>Artigos Encontrados na pesquisa ".$_POST['termo_pesquisa']."</th>";

//apresentar artigos disponiveis
	while ($mostrar = mysql_fetch_array($consulta)) {
		echo "<table width='800 px' border='1' align='center'>";
		echo "<tr>";
		echo "<td align='center' width='100' height='100' valign='middle'><img src='$pasta_imagens".$mostrar['imac.jpg']."'border='0'></td>";
		echo "<td><align='center'>".$mostrar['nome_artigo']."</a></br>EUR".$mostrar['preco_artigo']." </br>".$mostrar['descricao_artigo']."</td>";
		echo "<td width='200' align='left' valign='middle'></br><a href='comprar.php?id_artigo=".$mostrar['id_artigo']."'><img border=0 src='icones/carrinho.jpg'</td></tr>";
		echo "</table>"

	}

}

//caso nao haja artigos, informa ao utilizador
else{

	echo"<table width='800 px' border='1' align='center'>";
	echo"<td align='center'>Não foram encontrados artigos !!"; }}
?>

<table width='800 px border='1' align="center">
<form id="form_registo" name="form_registo" method="POST" action="pesquisa_artigo.php">
	<td>Pesquisar...<input type="text" name="termo_pesquisa" size="20" /> (campo obrigatório) </td>

<p><td><input type="submit" name="pesquisar" id="pesquisar" value="Pesquisar" />

	<input type="reset" name="apagar" id="apagar" value="apagar" /></td>

</tr>
</form></table>
