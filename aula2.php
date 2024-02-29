<?php
$dia_semana = 13;

switch ($dia_semana) {
	case '0':
		echo ("Hoje é Domingo pé de cachimbo");
		break;
	case '1':
		echo ("Hoje é Segunda, um beijo na bunda");
		break;
	case '2':
		echo ("Hoje é Terça");
		break;
	case '3':
		echo ("Hoje é Quarta");
		break;
	case '4':
		echo ("Hoje é Quinta");
		break;
	case '5':
		echo ("Hoje Sextou dog");
		break;
	case '6':
		echo ("Hoje é Sábado, vamo dale");
		break;
	default:
		echo ("Você não digitou nenhum número que corresponda a um dia da semana, tente novamente...");
		break;
}

for ($i = 0; $i < 10; $i++) {
	echo ("<br>Executando pela " . ($i + 1) . " vez");
}


//laco de repeticao com pre-validacao
$status  = true;
$j = 0;
while ($status) {
	if ($j == 9) {
		$status = false;
	}
	echo ("<br>Executando While " . ($j + 1) . "  vezes");
	$j++;
}

$encontrado = false;
$k = 1;
do {
	echo("<br>Executou Do...While ".($k)." Vezes");
	if ($k == 9) {
		$encontrado = true;
		echo ("<br>Encontrado dog, na $k vez");
	}
	$k++;
} while ($encontrado != true);