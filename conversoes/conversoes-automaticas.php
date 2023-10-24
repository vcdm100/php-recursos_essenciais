<?php

/* Quando uma string é verificada como sendo um valor numérico, ele é avaliado para que seu tipo seja determinado.

Uma string é avaliada como ponto flutuante se contiver qualquer um dos caracteres ".", "E" ou "e". Nos demais casos ela será avaliada como um inteiro.

Exemplos práticos: */

$valor = 1 + "7.5";
var_dump( $valor ); // Float 8.5

$valor = 1 + "-10";
var_dump( $valor ); // Int -9

$valor = 1 + "2e2";
var_dump( $valor ); // Float 201

$valor = 1 + "-10.5";
var_dump( $valor ); // Float -9.5