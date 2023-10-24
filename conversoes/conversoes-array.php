<?php

/* É possível converter qualquer valor para Array utilizando o casting (array). Para qualquer um dos tipos: integer, float, boolean, string e resource é obtido um elemento de índice 0 contendo o valor escalar informado.

Ao converter um objeto para Array, as propriedades do objeto serão os valores do array e os nomes dessas propriedades será o índice do Array. Isso é detalhado no curso de PHP que aborda Orientação a Objetos. Não se preocupe com esse conteúdo neste curso.

Ao converter um valor NULL se obterá como resultado um Array vazio.

Exemplos: */

$valor = "TreinaWeb";
var_dump( (array) $valor ); // array(1) { [0]=> string(9) "TreinaWeb" }

$valor = 1;
var_dump( (array) $valor ); // array(1) { [0]=> int(1) }

$valor = 1.5;
var_dump( (array) $valor ); // array(1) { [0]=> float(1.5) }

$valor = TRUE;
var_dump( (array) $valor ); // array(1) { [0]=> bool(true) }

$valor = NULL;
var_dump( (array) $valor ); // array(0) { } Array vazio