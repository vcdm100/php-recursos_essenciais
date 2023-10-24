<?php

/* 

Utilizam-se os modificadores (boolean) ou (bool) para converter valores para booleano. Também é possível usando a função settype().

Ao converter para booleano, os seguintes valores são considerados FALSE:

        Um valor booleano FALSE.

        Um inteiro 0 (zero).

        Um ponto flutuante 0.0 (zero).

        Uma string vazia e a string "0".

        Um array sem elementos.

        O tipo especial NULL (incluindo variáveis não definidas).

        O objeto SimpleXML criado de tags vazias. (SimpleXML será aprendido no módulo avançado de PHP.).

Alguns exemplos na prática: */

var_dump( (bool) FALSE ); // bool(false)

var_dump( (bool) 0 ); // bool(false)

var_dump( (bool) 0.0 ); // bool(false)

var_dump( (bool) "" ); // bool(false)

var_dump( (bool) "0" ); // bool(false)

var_dump( (bool) [] ); // Array vazio // bool(false)

var_dump( (bool) NULL ); // bool(false)

// Qualquer outro valor é retornado TRUE:

var_dump( (bool) TRUE ); // bool(true)

var_dump( (bool) 1 ); // bool(true)
 
var_dump( (bool) -1 ); // bool(true)

var_dump( (bool) 1.5e2 ); // bool(true)

var_dump( (bool) 1.5 ); // bool(true)

var_dump( (bool) "1" ); // bool(true)

var_dump( (bool) "TreinaWeb" ); // bool(true)
 
var_dump( (bool) "TRUE" ); // bool(true)

var_dump( (bool) "FALSE" ); // bool(true)

var_dump( (bool) ['Zend'] ); // bool(true)