<?php
//ligacao bd
	include('shopp.php');


	$cat_prod = $_POST["cat_prod"];
	$nome_prod = $_POST["nome_prod"];
	$desc_prod = $_REQUEST["desc_prod"];
	$preco_prod = $_POST["preco_prod"];
	$stock_prod = $_POST["stock_prod"];
	$img_nome = $_FILES["imagen"]["name"];

//determinar o tamanho e o tipo de ficheiro enviado
	$img_tamanho = round($_FILES["imagem"]["size"] / 1000);
	$img_tipo = $_FILES["imagem"]["type"];
	$local_final = "".$pasta_imagens.$img_nome;

//caso o tamanho ou tipo de ficheiro seja correto, permite o upload
	if ($img_tamanho < 350 && ($img_tipo == "image.jpeg" or $img_tipo == "image/pjpeg")) {


//copiar ficheiro para o destino
	(move_uploaded_file($_FILES['imagem']['tmp_name'], $local_final));


//hiperligação
	$sql_regista = "INSERT INTO artigos (id_categoria, nome_artigo, descricao_artigo, preco_artigo, stock_artigo, imagem_artigo) VALUES ('$cat_prod', '$desc_prod', '$preco_prod' , '$stock_prod', '$img_nome') ";

	$consulta=mysql_query($sql_regista);

//confirmar registo artigo
	echo "o registo foi efectuado com sucesso";
	}

//caso nao seja feito o upload da imagem, informa o ERRO
		else {

			echo"<p>Impossível carregar imagem.";

			if ($img_tamanho >350) {

				echo "<p>O ficheiro submetido tem o tamanho de ". $img_tamanho . "kB</br>";
			}

		else {

			echo "<p>O ficheiro é do tipo ". $img_tipo . "! </br>"; }
			echo "<p>O ficheiro não pode ultrapassar os 250 kB ou ter o formado diferente de JPEG</br>";
		}
?>

<p><a href="menu_admin.php">Continuar...</a></p>;