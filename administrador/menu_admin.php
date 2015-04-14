<?php
//iniciar sessão
	session_start();

//verificacao do utilizador se esta autenticado
	if(isset($_SESSION['id_utilizador'])) {

		echo "<tr>Não autorizado a aceder a esta página </tr>";

		echo "<tr><a href='index.php'>Voltar à página inicial</a></tr>"; }


//nivel utilizador
			else {

			if(isset($_SESSION['nivel_utilizador'])) {
				$nivel = $_SESSION ['nivel_utilizador'] ; }


			<table width="800 px" border="1" align="center">
				<td align="center">Menu de administrador</td><br />
				<tr><td><a href='adicionar_categoria.php'>Adicionar categoria</a>
				<p><a href='adicionar_artigo.php'>Ver encomendas</a>
				<p><a href='estado_encomenda.php'>Ver encomendas</a>
				<p><a href='loyout.php'>Terminar sessao</a>
				</td></tr>
				</td></tr>

				<?php }
?>