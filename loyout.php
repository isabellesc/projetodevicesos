<?php
//iniciar sessão
	session_start();

//fechar
	session_unset();
	session_destroy();

//enviar o utilizador para a pg inicial
	header('Location: index.php');
?>