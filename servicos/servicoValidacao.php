<?php

function validaNome(string $nome) : bool {
	if (empty($nome)) {
		setarMensagemErro('<div class="erro">' . 'O nome não pode estar vazio, por favor preencha-o novamente' . '</div>');
		return false;
	}
	else if (strlen($nome) < 3) {
		setarMensagemErro('<div class="erro">' . 'O nome deve conter mais de 3 caracteres' . '</div>');
		return false;
	}
	else if (strlen($nome) > 40) {
		setarMensagemErro('<div class="erro">' . 'O nome é muito extenso' . '</div>');
		return false;
	}
	return true;
}

function validaIdade(string $idade) : bool {
	if (!is_numeric($idade)) {
		setarMensagemErro('<div class="erro">' . 'Informe um número para idade' . '</div>');
		return false;
	}
	return true;
}
