<! PROBLEMA NA TABELA DE Encomenda-->


<?php
//iniciar sessao
	session_start();

//ligacao a bd
	include('shopp.php');

//sessao de compra
	$sessao = session_id();

//identificação do cliente
	$id_cliente = $_SESSION['id_cliente'];
	$sql_cliente = 'SELECT * FROM clientes WHERE id_cliente=' . $id_cliente;

	$consulta1 = mysql_query($sql_cliente);

	$mostrar = mysql_fetch_array($consulta1);
	extract ($mostrar);

//dados do utilizador
	echo "<table width='800 px' border='1' align='center'>";
	echo "<tr><td><strong>Passo 2 - Resumo da encomenda</strong></td></tr>";
?>

		<tr><td><table>
			<tr><td>Primeiro nome: <?php echo $primeiro_nome; ?></td></tr>
			<tr><td>Ultimo nome: <?php echo $apelido; ?></td></tr>
			<tr><td>Morada: <?php echo $endereco; ?></td></tr>
			<tr><td>Localidade: <?php echo $localidade; ?></td></tr>
			<tr><td>Código-Postal: <?php echo $codigo_postal; ?></td></tr>
			<tr><td>E-mail: <?php echo $email; ?></td></tr>
		</table>
<php
//artigos no carrinho
	$sql_carrinho = 'SELECT * FROM compra_temporaria temp JOIN artigos prod ON temp.id_artigo = prod.id_artigo WHERE sessao ="' . $sessao . '" ORDER BY temp.id_artigo ASC';

	$consulta2 = mysql_query($sql_carrinho);
	$resultado = mysql_num_rows ($consulta2);

//apresentar os artigos adicionados ao carrinho
	if ($resultado > 0) {

	$total = 0;

		echo "<table width='800px' border ='1' align='center'>";
		echo "<th>Imagem artigo</th></th>Detalhe artigo</th><th>Quantidade</th><th>Preço unitário</th><th>Total a pagar</th>";

		while ($mostrar = mysql_fetch_array($consulta2)) {

		extract ($mostrar);

		echo "<tr><td align ='center' width='100' height='100' valign='middle'><img src='pasta_imagens'.$imagem_artigo."' border='0'></a>";
		echo "<td align='center'>".$descricao_artigo."</td></a>";
		echo "<td align='center'>".$quantidade."</td>";
		echo "<td align='center'> € ".$preco_artigo."</td>";

//sub total
	$sub_total = number_format($preco_artigo * $quantidade, 2);
	echo "<td align='center'> € ".$sub_total."</td>";

//total
	$total = $total + $preco_artigo * $quantidade;
		}

		echo "<tr><td align='right' colspan='5'> Valor a pagar: <strong> € ".number_format($total,2)."</strong></td></tr>";
	}

//registo de nova compra na bd
	$sql_regista_compra = "INSERT INTO compra_confirmada (data_compra,id_cliente, total_pagar) VALUES (NOW(), '".$id_cliente."', '".$total."')";

	$consulta3 = mysql_query($sql_regista_compra);
	$id_compra = mysql_insert_id();

	$sql_regista_detalhes_compra = 'INSERT INTO detalhes_compra (id_compra, quantidade_compra, id_artigo) SELECT ' . $id_compra . ', quantidade, id_artigo FROM compra_temporaria WHERE sessao = "' . $sessao . '"';

	$consulta4 = mysql_query($sql_regista_detalhes_compra);

//elimina dados temporarios da encomenda
	$sql_elimina_temp = 'DELETE FROM compra_temporaria WHERE serssao = "' . $sessao . '"';

	$consulta5 = mysql_query($sql_elimina_temp);

//nr registo da encomenda
	echo "<td colspan='5'>Encomenda numero: ".$id_compra;
	echo "<p>Cópia da encomenda enviada por e-mail</p>";

	session_unset();
	session_destroy();

	echo "<p><a href='index.php'>Voltar à pagina inicial</a></p></td>";
?>