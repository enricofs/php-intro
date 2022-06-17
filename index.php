<?php
	include "servicos/servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Inscrição</title>

	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
	<main>
		<h1>Formulário para inscrição de competidores</h1>

		<form action="script.php" method="post">
			<p>Seu nome: <input type="text" name="nome" placeholder="Digite seu nome"></p>
			<p>Sua idade: <input type="text" name="idade" placeholder="Digite sua idade"></p>

			<?php
				$mensagemDeSucesso = obterMensagemSucesso();
				if (!empty($mensagemDeSucesso)) {
					echo $mensagemDeSucesso;
				}

				$mensagemDeErro = obterMensagemErro();
				if (!empty($mensagemDeErro)) {
					echo $mensagemDeErro;
				}
			?>
			<input class="button" type="submit" value="Enviar dados do competidor">
		</form>
			

		<div class="wave"></div>
	</main>	
</body>
</html>