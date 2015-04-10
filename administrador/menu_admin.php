<?php
//iniciar sessão
session_start();
//ligacao a bd
include("shopp.php");

/* = menu_admin
$username=$_POST['nome'];
$password=$_POST['password'];
$sql="SELECT id_cliente, nome_login, palavra_passe, palavra_passe='$password' ";
$consulta = mysql_query($sql);
$resultado = mysql_fetch_assoc($consulta);
$_SESSION['id_cliente'] = $resultado['id_cliente'];
$_SESSION['nome_login'] = $resultado['nome_login'];
$_SESSION['nivel_utilizador'] = $resultado['nivel_utilizador'];
if (mysql_num_rows($consulta) != 1) {

//voltar à pg de entrada se os dados são inválidos
header("Location: index.php"); exit;

//redireciona conforme o nivel
} elseif($_SESSION['nivel_utilizador'] ==1){

header("Location: administrador/menu_admin.php"); exit;

$_SESSION['id_cliente'] = $resultado['id_cliente'];
header("Location: index.php"); exit;
}



//var_dump($resultado);
//die();
*/

?>