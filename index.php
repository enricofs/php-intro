<?php

echo "<body style='background: black; color: white;'></body>" ;

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';
//print_r($categorias);

$nome = 'Enrico';
$idade = 8;

//var_dump($nome);
//var_dump($idade);

// 6 a 12
// 13 a 18
// 18

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
