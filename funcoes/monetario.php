<?php

$valor = 1879.851789;
$valor += 10; // (Somar)

$real = 'R$ ' . number_format($valor, 2, ',', '.');
## (Variavel, quantidade de casos decimais, será colocado por '.', será trocado por ',').

var_dump($real);

/* RESULTADO - SAÍDA

    string(11) "R$ 1.889,85"

*/