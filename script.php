<?php

echo "<body style='background: black; color: white;'></body>" ;

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
	for ($i=0; $i < count($categorias); $i++) { 
		if ($categorias[$i] == 'Infantil')  
			echo "O nadador " . $nome . " compete na caragoria " .$categorias[$i];
	}

}
elseif ($idade >= 13 && $idade <= 18) {
	for ($i=0; $i < count($categorias); $i++) { 
		if ($categorias[$i] == 'Adolescente')  
			echo "O nadador " . $nome . " compete na caragoria Adolescente";
	}
}
else {
	for ($i=0; $i < count($categorias); $i++) { 
		if ($categorias[$i] == 'Adulto')  
			echo "O nadador " . $nome . " compete na caragoria Adulto";
	}
}