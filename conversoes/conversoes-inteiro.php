<?php

/* 

(tipo) $variavel;

O ( tipo ) pode conter espaços entre os parênteses.

Os tipos de conversão disponíveis são:

(int) e (integer) convertem para inteiro;
(bool) e (boolean) convertem para booleano;
(float), (double) e (real) convertem para float;
(string) converte para String;
(array) converte para Array;
(object) converte para objeto;
(unset) que converte para NULL. 

*/

#Convertendo valores para inteiro:

// Usam-se os modificadores (int) e (integer) ou as funções settype() e intval() para converter valores para inteiro.

$valor = TRUE;

settype($valor, "integer");

var_dump($valor); // 1

// --

$valor = FALSE;

var_dump(intval($valor) ); // 0

// --

$valor = TRUE;

var_dump((int)$valor); // 1

/* No exemplo foram usadas as formas disponíveis para conversão de dados para inteiro:

    Usando (int);
    Ou settype();
    Ou intval().

    Também é possível observar que booleanos convertidos para inteiro, quando TRUE, retornam 1 e FALSE retornam 0. */
    
// Strings que não começam com nenhum valor numérico retornam 0:

$valor = "TreinaWeb";

var_dump( (int) $valor ); // Retorna 0

// Agora, se há algum valor numérico no início da string:

$valor = "20TreinaWeb";

var_dump( (int) $valor ); // Retorna 20

/* OBS: Parte numérica é mantida e todo o resto da string é ignorado/cortado. */

#alores de ponto flutuante (float):

//Ao converter números de ponto flutuante (números com casas decimais) para inteiro, o número é truncado. Por exemplo:

$valor = 25.7;
var_dump( (int) $valor ); // Resultado: 25

// --

$valor = 25.7 + 10.7;
var_dump( (int) $valor ); // Resultado: 36

/* Os valores foram truncados, ou seja, suas casas decimais foram ignoradas/cortadas, permanecendo apenas a parte inteira do valor.

Explicação:

25.7 é truncado para 25.
25.7 + 10.7 = 36.4; quando truncado, resulta em 36. */

#Convertendo Arrays para inteiro:

//Exemplo:

$cursos =  [9,2,3,7];
var_dump( (int) $cursos ); // Retorna: 1

$cursos = [NULL];
var_dump( (int) $cursos ); // Retorna: 1

$cursos = [];
var_dump( (int) $cursos ); // Retorna: 0

$cursos = [''];
var_dump( (int) $cursos ); // Retorna: 1

// OBS: Um arrays quando convertidos para inteiro retorna 1 se tiver elementos 0 caso esteja vazio.