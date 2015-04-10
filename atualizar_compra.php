<?php
//iniciar sessão
	session_start();

//ligação à base de dados
	include('shopp.php');

//verificar numero de sessao
	$sessao = session_id();

//valores de compra
	$quantidade = $_REQUEST['quantidade'];
	$id_artigo = $_REQUEST['id_artigo'];
	$acao = $_REQUEST['submit'];

	switch ($acao) {


// apresenta opcao conforme cada caso: adicionar, alterar ou remover
// adicionar artigo
	case 'Adicionar':
	$sql_adicionar = "INSERT INTO compra_temporaria (sessao, id_artigo, quantidade) VALUES ('$sessao', '$id_artigo', '$quantidade')";
	$consulta = mysql_query($sql_adicionar);

	header("Location:".$_SERVER['HTTP_REFERER']);

	exit();
	break;

//alterar artigo
	case 'Alterar':
	if ($quantidade > 0) {
		$sql_alterar1 = "UPDATE compra_temporaria SET quantidade = '$quantidade' WHERE sessao = '$sessao' AND id_artigo = '$id_artigo'";
		$consulta1 = mysql_query($sql_alterar1); }

		else{
			$sql_alterar2 = "DELETE FROM compra_temporaria WHERE sessao = '$sessao' AND id_artigo = '$id_artigo'";
			$consulta2 = mysql_query($sql_alterar2); }

	header("LOCATION:".$_SERVER['HTTP_REFERER']);
	exit();
	break;

//remover artigo
	case 'Remover artigo':
	$sql_remover = "DELETE FROM compra_temporaria WHERE sessao = '$sessao' AND id_artigo = '$id_artigo'";
	$consulta = mysql_query($sql_remover);
	header("LOCATION:".$_SERVER['HTTP_REFERER']);

	exit()
	break; }

?>