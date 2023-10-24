<?php

/* Você pode converter um valor para string utilizando o molde (string), ou as funções settype() e strval(). Conversão para string é automaticamente realizada no escopo de uma expressão para onde uma string é necessária. Por exemplo, isso acontece quando se usa as funções echo() ou print(), ou quando se compara o valor de uma variável a uma string.

O valor boolean TRUE é convertido para string como sendo "1". O valor FALSE é representado como "" (uma string vazia). Desta forma, você pode converter livremente entre os tipos booleano e string.

Um integer ou um float é convertido para a representação string do número em dígitos arábicos (incluindo a parte expoente para um float). Números de ponto flutuante podem ser convertidos usando a notação exponencial (4.1E+6).

Arrays são sempre convertidos para uma string "Array", mas geram um erro do tipo “Notice”.

Objetos são impressos quando a classe declara o método __toString. Caso contrário, é gerado um Fatal Error. Objetos fazem parte do escopo de Orientação a Objetos e é ensinado em outro módulo do curso de PHP. Por isso, não se preocupe com eles neste curso.

Resources são sempre convertidos para strings na estrutura "Resource id #1" onde 1 é o número único do resource assimilado pelo PHP na execução. Se você quiser obter o tipo do recurso, utilize get_resource_type().

NULL é sempre convertido para uma string vazia.

Ao imprimir arrays, objetos ou recursos não é obtida qualquer informação útil sobre seus valores. Por esse motivo são usadas as funções print_r() e var_dump().

Exemplos: */

$valor = TRUE;
var_dump( (string) $valor ); // String '1'

$valor = FALSE;
var_dump( (string) $valor ); // String Vazia ''

$valor = NULL;
var_dump( (string) $valor ); // String Vazia ''

$valor = 1;
var_dump( (string) $valor ); // String '1'

$valor = -1;
var_dump( (string) $valor ); // String '-1'

$valor = 1.5;
var_dump( (string) $valor ); // String '1.5'

$valor = 2e2;
var_dump( (string) $valor ); // String '200'

$valor = 0xffffffffff;
var_dump( (string) $valor ); // String '1099511627775'

$valor = 0xfffffffffffff;
var_dump( (string) $valor ); // String '4503599627370495'

$valor = [];
var_dump( (string) $valor ); // String 'Array'

$valor = [1,5,8];
var_dump( (string) $valor ); // String 'Array'