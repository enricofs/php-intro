<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string {

	$categorias = [];
	$categorias[] = 'infantil';
	$categorias[] = 'adolescente';
	$categorias[] = 'adulto';
	//print_r($categorias);

	if (validaNome($nome) && validaIdade($idade)) {
		removerMensagemErro();
		if ($idade >= 6 && $idade <= 12) {
				for ($i=0; $i < count($categorias); $i++) { 
					if ($categorias[$i] == 'infantil') {
						setarMensagemSucesso('<div class="sucesso">' . "O nadador " . $nome . " compete na categoria " .$categorias[$i] . '</div>');
						return null;
					}	
				}

			}
			else if ($idade >= 13 && $idade <= 18) {
				for ($i=0; $i < count($categorias); $i++) { 
					if ($categorias[$i] == 'adolescente') {
						setarMensagemSucesso('<div class="sucesso">' . "O nadador " . $nome . " compete na categoria " .$categorias[$i] . '</div>');
						return null;
					}
				}
			}
			else {
				for ($i=0; $i < count($categorias); $i++) { 
					if ($categorias[$i] == 'adulto') {
						setarMensagemSucesso('<div class="sucesso">' . "O nadador " . $nome . " compete na categoria " .$categorias[$i] . '</div>');
						return null;
					}
				}
			}
	}
	else {
		removerMensagemSucesso();
		return obterMensagemErro();
	}
}