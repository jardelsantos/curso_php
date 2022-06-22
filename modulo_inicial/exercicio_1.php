<?php

/***
 * Elaborar um algoritmo em pseudocodigo que:
 * efetue a leitura de um número inteiro e 
 * apresente uma mensagem informando se o número é par ou ímpar.
 */

echo "Exercício 1\n";

echo "Informe um número Inteiro: \n";
$n1 = readline();

if( ($n1 % 2) == 0){
    echo 'Número é par';
}else{
    echo 'Número é impar';
}
