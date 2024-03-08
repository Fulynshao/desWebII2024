<?php
echo("=====EXERCICIO 1===<br>");
$horas = 160;
$valHora = 25;
$salario = $horas * $valHora;

echo($salario. " Reais<br><br>");

echo("=====EXERCICIO 2===<br>");
$altura = 1.80;

$sexo = 'M';

if ($sexo == 'M') {
    $idealHomem = ((72.7*$altura) - 58);
    echo($idealHomem . "<br><br>");
} elseif ($sexo == 'F') {
    $idealMulher = ((62.1*$altura) - 44.7);
    echo($idealMulher . "<br><br>");
}

echo("=====EXERCICIO 3===<br>");
$nota1 = 6;
$nota2 = 9;
$nota3 = 10;
$notasSomadas = 0;
$contador = 0;

if (0 <= $nota1 && $nota1 <= 10.0) {
    $notasSomadas += $nota1;
    $contador++;
}
if (0 <= $nota2 && $nota2 <= 10.0) {
    $notasSomadas += $nota2;
    $contador++;
}
if (0 <= $nota3 && $nota3 <= 10.0) {
    $notasSomadas += $nota3;
    $contador++;
}
if ($contador == 0) {
    echo ("Nao informado nenhuma nota valida<br><br>");
} else {
    $media = $notasSomadas / $contador;

    echo ($media . "<br><br>");
}


echo("=====EXERCICIO 4===<br>");
$peso = 30;
$altura = 1.70;

$imc = $peso / ($altura * $altura);

if ($imc > 40.0) {
    printf("Seu imc é %.2f sendo considerado OBESIDADE GRAVE<br><br>", $imc);
} else if ($imc < 40.0 && $imc >= 30.0) {
    printf("Seu imc é %.2f sendo considerado OBESIDADE<br><br>", $imc);
} else if ($imc < 30.0 && $imc >= 25.0) {
    printf("Seu imc é %.2f sendo considerado SOBREPESO<br><br>", $imc);
} else if ($imc < 25.0 && $imc >= 18.5) {
    printf("Seu imc é %.2f sendo considerado NORMAL<br><br>", $imc);
} else if ($imc < 18.5) {
    printf("Seu imc é %.2f sendo considerado MAGREZA<br><br>", $imc);
}

echo("=====EXERCICIO 5===<br>");
$alturaChico = 0.8;
$alturaJuca = 0.6;
$cresceChico = 0.06;
$cresceJuca = 0.09;
$contadorAnos = 0;

do {
    $alturaChico += $cresceChico;
    $alturaJuca += $cresceJuca;
    $contadorAnos++; 
} while ($alturaChico > $alturaJuca);

echo ("Levaram " . $contadorAnos . " Anos para o Juca passar a altura do Chico");