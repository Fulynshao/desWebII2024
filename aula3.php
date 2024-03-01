<?php
date_default_timezone_set('America/Sao_Paulo');
//exibindo a data completa
echo (date("j/m/y"));
echo ("<br>");

//dia da semana
echo (date("D"));
echo ("<br>");
echo (date("N"));

//definindo um array
//me perdi setando git aqui e nao anotei os codigos, pego depois, ou talvez nao

//outra forma de criar um array
$numeros = [10, 70, 62, 48, 45, 99, 89];

$posicao_encontrado = array_search(48, $numeros);

if (!$posicao_encontrado) {
    echo ("<br>Não achemo o numro");
} else {
    echo ("<br>O numero escolhido está na posição " . $posicao_encontrado);
}

//ordenando o array de forma crescente

echo("<br> Array antes de ser ordenado:<br> ");
print_r($numeros);

sort($numeros);
echo("<br>Array ordanado de maneira crescente:<br>");
print_r($numeros);  

rsort($numeros);
echo("<br>Agora de maneira descrescente com rsort<br>");
print_r($numeros);

//usando explode para separar uma string em pedaços por meio de um caractere limitador
$string = "Mateus:20:1.75:Técnico em informática";

$informacao = explode(":", $string);

print_r($informacao);
?>