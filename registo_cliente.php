<?php
//iniciar sessao
	session_start();

//RESGISTAR UTILIZADOR
	if(isset($_REQUEST['registar'])){

//ligacao bd
	include ('shopp.php');


$sql_cliente = "INSERT INTO clientes(nome_login, palavra_passe, primeiro_nome, apelido, endereco, localidade, codigo_postal, telefone, email, nivel_utilizador) VALUES ('".$_POST['nome_login']."',
	'".$_POST['palavra_passe']."',
	'".$_POST['primeiro_nome']."',
	'".$_POST['apelido']."',
	'".$_POST['endereco']."',
	'".$_POST['localidade']."',
	'".$_POST['codigo_postal']."',
	'".$_POST['telefone']."',
	'".$_POST['email']."', '2') ";

$consulta = mysql_query($sql_cliente);

//remeter para a pagina de entrada
	header("Location: index.php"); }
?>


		<form id="form_registo" name="form_registo" method="POST" action="registo_cliente.php">
		<table width="800" border="1" cellpadding="0" cellpadding="0" align="center">
			<td colspan="2">Registo de Cliente</th>
			<tr><td width="200">Nickname:</td>
			<td width="600"><input type="text" name="nome_login" size="20"/></td>
			</tr>
			<tr><td>Palavra passe:</td>
			<td><input type="password" name="palavra_passe" size="8" />(máx 8 carateres)</td>
			</tr>
			<tr><td>Primeiro nome:</td>
			<td><input type="text" name="primeiro_nome" size="15" /></td>
			</tr>
			<tr><td>Ultimo nome:</td>
			<td><input type="text" name="apelido" size="25" /></td>
			</tr>
			<tr><td>Morada:</td>
			<td><input type="text" name="endereco" size="50" /></td>
			</tr>
			<tr><td>Localidade:</td>
			<td><input type="text" name="localidade" size="25" /></td>
			</tr>
			<tr><td>Código Postal:</td>
			<td><input type="text" name="codigo_postal" size="8" /></td>
			</tr>
			<tr><td>Telefone</td>
			<td><input type="text" name="telefone" size="25" /></td>
			</tr>
			<tr><td>E-mail:</td>
			<td><input type="text" name="email" size="50" /></td>
			</tr>
				<td colspan="2" align="center"><input type="submit" name="registar" id="registar" value="Registar" />
				<input type="reset" name="apagar" id="apagar" value="Apagar" />
		</td></table></form>
