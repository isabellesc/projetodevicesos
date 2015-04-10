<?php 
//iniciar sessao
session_start();

//ligacao a bd
include('shopp.php');

//preparar sessao de compra
$sessao = session_id();


//o script verifica se o cliente esta autenticado
//uma vez q so os clientes registados podem proceder a compra
if(isset($_SESSION['id_cliente']) == FALSE ) {

	echo "<tr>Tem de se autenticar para poder continuar a compra! </tr>";
	echo "<tr><a href='login.php'>Voltar à página inicial!</a></tr>"; }


//caso esteja autenticado exibe os dados pessoais
else {

	$id_cliente = $_SESSION['id_cliente'];
	$sql_cliente = 'SELECT * FROM clientes WHERE id_cliente='.$id_cliente;
	$consulta = mysql_query($sql_cliente);
	$mostrar = mysql_fetch_array($consulta);
	extract ($mostrar);


//apresenta tabela com os dados do utilizador
	echo "<table width='800 px' border='1' align='center'>";
	echo  "<tr><td><strong>Passo 1 : Dados para o envio</strong></td></tr>";
?>

<tr><td>
<table>
	<tr><td>Primeiro nome: <?php echo $primeiro_nome; ?></td></tr>
	<tr><td>Ultimo nome: <?php echo $apelido; ?></td></tr>
	<tr><td>Morada: <?php echo $endereco; ?></td></tr>
	<tr><td>Codigo-Postal: <?php echo $codigo_postal; ?></td></tr>
	<tr><td>Localidade: <?php echo $localidade; ?></td></tr>
	<tr><td>Email: <?php echo $email; ?></td></tr>
</table>


<?php
//pesquisa artigos no carrinho
	$sql_carrinho = 'SELECT * FROM compra_temporaria temp JOIN artigos prod ON temp.id_artigo = prod.id_artigo WHERE sessao = "' . $sessao , '" ORDER BY temp.id_artigo ASC';
	$consulta = mysql_query($sql_carrinho);
	$resultado = mysql_num_rows($consulta);


//apresentar os artigos adicionados ao carrinho
if ($resultado > 0) {
	$total = 0;

	echo "<table width='800 px' border='1' align='center'>";
	echo "<th>Imagem Artigo</th><th>Detalhes Artigos</th><td>Quantidade</td><td>Preço</td><td>Total a pagar</td>";

	while ($mostrar = mysql_fetch_array($consulta)){
		extract($mostrar);

		echo "<tr><td align ='center' width='100' height ='100' valign='middle'><img src='$pasta_imagens".$imagem_artigo."' border='0'></a>";
		echo "<td align='center'>".$descricao_artigo."</td></a>";
		echo "<td algign='center'>".$quantidade."</td>";
		echo "<td align='center'>EUR ".$preco_artigo."</td>";


//calcular subtotal
	$sub_total = number_format($preco_artigo * $quantidade, 2)
	echo "<td align='center'>EUR ".$sub_total."</td>";


//calcular valor total das compras
	$total = $total + $preco_artigo * $quantidade; }

	echo "tr><td align='right' colspan='5'>Valor total : <strong>EUR ".number_format($total,2)."</strong></td></tr>"; }

?>

//vai permitir prosseguir a encomenda
<form method="POST" action="finalizar_compra_2.php">
	<tr><td colspan="2"><input type="submit" value="Concluir a comprar"/></td></tr>
</form>

</table>

<?php }
?>
