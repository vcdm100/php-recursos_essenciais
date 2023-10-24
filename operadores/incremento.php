<?php

$inteiro = 10;

//Incremento ++ (Aumentar)
$inteiro = $inteiro + 1; // ou
$inteiro++;

//Decremento -- (Diminuir)
$inteiro = $inteiro - 1; // ou
$inteiro--;

// =======================================

$a = 0;
while ($a <= 10) {

    echo "$a <br>";

    $a++;

}

// =======================================

$numero = 100;
echo "<br>";
var_dump($numero++);
var_dump($numero);

$numero = 100;
echo "<br><br>";
var_dump(++$numero);
var_dump($numero);

$numero = 100;
echo "<br><br>";
var_dump($numero--);
var_dump($numero);

$numero = 100;
echo "<br><br>";
var_dump(--$numero);
var_dump($numero);

/* RESULTADO - SAÍDA

    0
    1
    2
    3
    4
    5
    6
    7
    8
    9
    10

    int(100) int(101)

    int(101) int(101)

    int(100) int(99)

    int(99) int(99) 

*/