<?php

//iniciar sessão
	session_start();

//ligacao a bd
	include('shopp.php');

//Verificar os campos do formulário foram preenchidos
	if (!empty($_POST) AND (empty($_POST['nome']) OR empty($_POST['password']))){



//se os campos estão vazios, voltar à pagina inicial
	header("Location: index.php"); exit;
}


	$username=$_POST['nome'];
	$password=$_POST['password'];
	$sql="SELECT * FROM clientes WHERE nome_login = '$username' AND palavra_passe='$password'";
	$consulta = mysql_query($sql);
	$resultado = mysql_fetch_assoc($consulta);

	$_SESSION['id_cliente'] = $resultado['id_cliente'];
	$_SESSION['nome_login'] = $resultado['nome_login'];
	$_SESSION['nivel_utilizador'] = $resultado['nivel_utilizador'];

	if (mysql_num_rows($consulta) != 1) {


//voltar à pg de entrada se os dados são inválidos
		header("Location: index.php?erro=1"); exit;


//redireciona conforme o nivel
		} 
		elseif($_SESSION['nivel_utilizador'] == 1){

			header("Location: administrador/menu_admin.php"); exit;

			$_SESSION['id_cliente'] = $resultado['id_cliente'];
			header("Location: index.php"); exit;
		}
		else {
			header("Location: index.php"); exit;
		}



?>