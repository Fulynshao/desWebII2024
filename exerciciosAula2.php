<?php
// exercicio 1 : Faça um programa que escreva os numeros pares entre 2020 e 5000.
// A saida deve exibir um numero abaixo do outro

/*
for ($i = 2020; $i <= 5000; $i++) {
    if ($i % 2 == 0) {
        echo "$i";
        echo"<br>";
    }
}
*/


//exercicio 2 : Faça um programa que execute um laço de repetição de 1 a 500 e exiba os numeros na tela.
//Caso o numero seja divisivel por 3 deve escrever 'Fizz', caso seja divisivel por 5 deve escrever 'Buzz'.
//Caso seja divisivel por 3 e por 5, deve escrever 'FizzBuzz'.
// Exemplo de saida : 1, 2, Fizz, 4, Buzz, Fizz, 7 8, ..., 14, FizzBuzz, ... 499
//Ao exibir o ultimo numero, a virgula nao deve aparecer

/*
for ($j = 1; $j < 500; $j++) {
    if (($j % 3 == 0) && ($j % 5 == 0)) {
        echo "FizzBuzz";
    }
    else if ($j % 5 == 0) {
        echo "Buzz";
    }
    else if (($j % 3 == 0)) {
        echo "Fizz";
    } else {
        echo $j;
    }
    if ($j < 500) {
        echo ", ";
    }
}
*/

//exercicio 3

/*
for ($k = 2; $k < 100; $k++) {
    $e_primo = true;
    for ($l = 2; $l < $k; $l++) {
        if ($k % $l == 0) {
            $e_primo = false;
            break;
        }
    }
    if ($e_primo) {
        echo"$k<br>";
    }
}
*/

// exercicio 4

$primosEncontrados = 0;
$num = 2;
 while ($primosEncontrados < 10) {
    $e_Primo = true;
    for ($i = 2; $i < $num; $i++) {
        if($num % $i == 0) {
            $e_Primo = false;
            break; 
        }
    }
    if ($e_Primo) {
        echo "$num, ";
        $primosEncontrados++;
    }
    $num++;
 }