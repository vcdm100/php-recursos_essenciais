<?php

/* Exceto a conversão de Strings para Float (visto no tópico anterior), todos os outros tipos, quando convertidos para Float, primeiramente são convertidos para Inteiro e então para Float.

Exemplos: */

$valor = TRUE;
var_dump( (float) $valor ); // Float 1

$valor = [9,2,3,7];
var_dump( (float) $valor ); // Float 1

$valor = [];
var_dump( (float) $valor ); // Float 0

$valor = [NULL];
var_dump( (float) $valor ); // Float 1

$valor = [''];
var_dump( (float) $valor ); // Float 1

// Observação: Todo valor convertido para Float internamente, primeiro é convertido para inteiro e em seguida convertido para float.

#O exemplo resulta em Float 1, mas para chegar a esse resultado é como se o PHP tivesse executado os seguintes processos:

$valor = TRUE;
$valor = (int) $valor; // Primeiro converte para inteiro (Int)
$valor = (float) $valor; // E depois converte para Float

var_dump( $valor ); // Float 1