<?php
//ligacao a bd
//hiperligacao com comprar.php
	include('shopp.php');

//valor da categoria
	$id_cat = $_GET['id_cat'];


//procurar artigos disponiveis
	$sql_cat = 'SELECT * FROM artigos WHERE id_categoria=' . $id_cat. ' ORDER BY nome_artigo ASC';
	$consulta = mysql_query($sql_cat);



//verificar se existem resultados e mostrá-los
	if ($consulta !=0) {
		echo "<table width='800 px' border='8' align='center'>";
		echo "<th>Artigos disponíveis para venda</th>";



//apresentar artigos disponiveis
	while ($mostrar = mysql_fetch_array($consulta)) {
		echo "<table width='800px' border ='10' align='center'>";
		echo "<tr>";
		echo "<td align='center' width='100' height='100' valign='middle'><img src='pasta_imagens/".$mostrar['imagem_artigo']."'border='0' width='200'></td></br></br>";
		echo "<td><align='center'>".$mostrar['nome_artigo']."</a></br> € ".$mostrar['preco_artigo']."</br>".$mostrar['descricao_artigo']."</td>";
		echo "<td width='200' align='left' valign='middle'></br><a href='comprar.php?id_artigo=".$mostrar['id_artigo']."'><img border='0' width='200' height='190' align='center' src='icones/shop.jpg'></td></tr>";
		echo "</table>";
}}



//se nao houver registos, informa ao utilizador
			else{
				echo('<table width="800 px" border=0 align="center" class="tabela_geral" cellspacing=0>');
				echo('<td class="tabela_geral" colspan="2" align="center">Lista de endereços registados</td>');
				echo('<tr><td>A base de dados não contém registos!</td></tr>');
				echo('<tr><td><a href="index.php">Continuar...</a></td></tr>');
}
?>